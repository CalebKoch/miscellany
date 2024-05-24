<?php

namespace App\Services\Abilities;

use App\Facades\Avatar;
use App\Facades\Mentions;
use App\Models\Attribute;
use App\Models\Entity;
use App\Models\EntityAbility;
use App\Models\Tag;
use App\Traits\CampaignAware;
use App\Traits\EntityAware;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class AbilityService extends BaseAbilityService
{
    use CampaignAware;
    use EntityAware;

    /** @var array All the abilities of this entity, nicely prepared */
    protected array $abilities = [
        'groups' => [],
        'meta' => [],
    ];

    /** @var array A list of abilities that have already been loaded */
    protected array $abilityIds = [];

    protected array $groups = [];

    /**
     * Build a list of entities grouped by their parent
     */
    public function get(): array
    {
        $abilities = $this->entity->abilities()
            ->select('entity_abilities.*')
            ->with(['ability',
                // entity
                'ability.entity', 'ability.entity.image', 'ability.entity.attributes', 'ability.entity.attributes.entity',
                // parent
                'ability.ability', 'ability.ability.entity', 'ability.ability.entity.tags', 'ability.ability.entity.image',
            ])
            ->join('abilities as a', 'a.id', 'entity_abilities.ability_id')
            ->defaultOrder()
            ->get();
        /** @var EntityAbility $ability */
        foreach ($abilities as $ability) {
            // Can't read the ability? skip
            if (empty($ability->ability) || empty($ability->ability->entity)) {
                continue;
            }
            // If this ability has a parent ability, save it there
            $this->add($ability);
        }

        // Reorder parents
        $this->abilities['groups'] = $this->groups;
        usort($this->abilities['groups'], function ($a, $b) {
            return strcmp(mb_strtoupper($a['name']), mb_strtoupper($b['name']));
        });

        // Meta
        $this->abilities['meta'] = [
            'add_url' => route('entities.entity_abilities.create', [$this->campaign, $this->entity]),
            'user_id' => auth()->check() ? auth()->user()->id : 0,
            'is_admin' => auth()->check() && auth()->user()->isAdmin(),
        ];
        return $this->abilities;
    }



    /**
     */
    protected function add(EntityAbility $entityAbility): void
    {
        $ability = $entityAbility->ability;
        $parent = $ability->ability;

        $groupKey = $parent->id ?? 'unorganised';

        if (empty($this->groups[$groupKey])) {
            if (empty($parent)) {
                $this->groups[$groupKey] = [
                    'id' => 0,
                    'name' => __('entities/abilities.groups.unorganised'),
                    'type' => __('entities/abilities.types.unorganised'),
                    'abilities' => [],
                ];
            } else {
                $type = empty($parent->type) ? Str::limit(strip_tags($parent->entry), 200) : $parent->type;
                $this->groups[$groupKey] = [
                    'id' => $parent->id,
                    'name' => $parent->name,
                    'type' => $type,
                    'image' => Avatar::entity($parent->entity)->size(192)->thumbnail(),
                    'has_image' => $parent->entity->hasImage(),
                    'entry' => $parent->parsedEntry(),
                    'url' => $parent->getLink(),
                    'abilities' => [],
                ];
            }
        }
        // Add to their parent's abilities
        $this->groups[$groupKey]['abilities'][] = $this->formatAbility($entityAbility);
    }

    /**
     * Prepare the entity ability into a json object that can be used on the frontend
     */
    protected function formatAbility(EntityAbility $entityAbility): array
    {
        $classes = [];
        $tags = $entityAbility->ability->entity->tagsWithEntity();
        foreach ($tags as $tag) {
            $classes[] = ' kanka-tag-' . $tag->id;
            $classes[] = ' kanka-tag-' . $tag->slug;

            if ($tag->tag_id) {
                $classes[] = ' kanka-tag-' . $tag->tag_id;
            }
        }
        //implode(' ', $classes);

        $note = nl2br((string) $this->mapAttributes(
            Mentions::mapAny($entityAbility, 'note'),
            false
        ));
        if (!empty($note)) {
            $note = '<strong>' . __('entities/abilities.fields.note') . ':</strong> ' . $note;
        }

        $data = [
            'id' => $entityAbility->id,
            'ability_id' => $entityAbility->ability_id,
            'name' => $entityAbility->ability->name,
            'entry' => $this->parseEntry($entityAbility->ability),
            'type' => $entityAbility->ability->type,
            'charges' => $this->parseCharges($entityAbility->ability),
            'used_charges' => $entityAbility->charges,
            'class' => $classes,
            'note' => $note,
            'tags' => $this->formatTags($tags),
            'visibility_id' => $entityAbility->visibility_id,
            'visibility' => $entityAbility->visibilityName(),
            'created_by' => $entityAbility->created_by,
            'attributes' => $this->attributes($entityAbility->ability->entity),
            'images' => [
                'has' => !empty($entityAbility->ability->entity->image_path) || $entityAbility->ability->entity->image,
                'thumb' => Avatar::entity($entityAbility->ability->entity)->size(192)->thumbnail(),
                'url' => Avatar::entity($entityAbility->ability->entity)->original(),
            ],
            'actions' => [
                'edit' => route('entities.entity_abilities.edit', [$this->campaign, $this->entity, $entityAbility]),
                'update' => route('entities.entity_abilities.update', [$this->campaign, $this->entity, $entityAbility]),
                'delete' => route('entities.entity_abilities.destroy', [$this->campaign, $this->entity, $entityAbility]),
                'view' => route('entities.show', [$this->campaign, $entityAbility->ability->entity]),
            ],
            'i18n' => [
                'edit' => __('crud.update'),
                'left' => __('entities/abilities.charges.left')
            ],
            'entity' => [
                'id' => $entityAbility->ability->entity->id,
                'tooltip' => route('entities.tooltip', [$this->campaign, $entityAbility->ability->entity->id]),
            ],
        ];

        if (!empty($entityAbility->ability->charges)) {
            $data['actions']['use'] = route('entities.entity_abilities.use', [$this->campaign, $this->entity, $entityAbility]);
        }

        return $data;
    }

    /**
     */
    protected function attributes(Entity $entity): array
    {
        $attributes = [];
        /** @var Attribute $attr */
        foreach ($entity->attributes->sortBy('default_order') as $attr) {
            $attributes[] = [
                'id' => $attr->id,
                'name' => $attr->name(),
                'value' => Mentions::mapAttribute($attr),
                'type' => $attr->type,
            ];
        }
        return $attributes;
    }

    protected function formatTags(Collection $tags): array
    {
        $formatted = [];
        /** @var Tag $tag */
        foreach ($tags as $tag) {
            $formatted[] = [
                'id' => $tag->id,
                'name' => $tag->name,
                'url' => $tag->getLink(),
            ];
        }

        return $formatted;
    }
}
