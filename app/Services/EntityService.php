<?php

namespace App\Services;

use App\Facades\Module;
use App\Models\Campaign;
use App\Models\MiscModel;
use App\Traits\CampaignAware;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use App\Facades\CampaignLocalization;

class EntityService
{
    use CampaignAware;

    /** @var array List of entity types */
    protected array $entities;

    protected array $exclude = [];

    /**
     * EntityService constructor.
     */
    public function __construct()
    {
        $this->entities = [
            'abilities' => 'App\Models\Ability',
            'characters' => 'App\Models\Character',
            'calendars' => 'App\Models\Calendar',
            'conversations' => 'App\Models\Conversation',
            'creatures' => 'App\Models\Creature',
            'events' => 'App\Models\Event',
            'families' => 'App\Models\Family',
            'items' => 'App\Models\Item',
            'journals' => 'App\Models\Journal',
            'locations' => 'App\Models\Location',
            'maps' => 'App\Models\Map',
            'notes' => 'App\Models\Note',
            'organisations' => 'App\Models\Organisation',
            'quests' => 'App\Models\Quest',
            'races' => 'App\Models\Race',
            'tags' => 'App\Models\Tag',
            'timelines' => 'App\Models\Timeline',
            'attribute_templates' => 'App\Models\AttributeTemplate',
            'dice_rolls' => 'App\Models\DiceRoll',
            'menu_links' => 'App\Models\MenuLink',
            'relations' => 'App\Models\Relation',
        ];
    }

    public function exclude(array $exclude): self
    {
        $this->exclude = $exclude;
        return $this;
    }
    /**
     * Get the entities
     * @return array
     */
    public function entities(): array
    {
        if (empty($this->excluded)) {
            return $this->entities;
        }

        $entities = [];
        foreach ($this->entities as $name => $class) {
            if (in_array($name, $this->excluded)) {
                continue;
            }
            $entities[$name] = $class;
        }
        return $entities;
    }

    /**
     * @param string $entity
     * @return string
     */
    public function singular(string $entity): string
    {
        $singular = rtrim($entity, 's');
        if ($entity == 'families') {
            $singular = 'family';
        } elseif ($entity == 'abilities') {
            $singular = 'ability';
        }
        return $singular;
    }


    /**
     * @param string $name
     * @param string $target
     * @return MiscModel
     * @throws \Exception
     */
    public function create($name, $target)
    {
        // Create new model
        if (!isset($this->entities[$target])) {
            throw new \Exception("Unknown entity type '{$target}' for creating entity");
        }

        /**
         * @var MiscModel $new
         */
        $new = new $this->entities[$target]();
        $new->name = $name;
        $new->is_private = Auth::user()->isAdmin() ? CampaignLocalization::getCampaign()->entity_visibility : false;
        $new->save();
        return $new;
    }

    /**
     * Get an entity object string based on the entity type
     * @param string $entity
     * @return string|bool
     */
    public function getClass(string $entity)
    {
        return Arr::get($this->entities, $entity, false);
    }

    /**
     * Get a list of enabled entities of a campaign
     * @param Campaign $campaign
     * @param array $except
     * @return array
     */
    public function getEnabledEntities(Campaign $campaign, array $except = [])
    {
        $entityTypes = [];
        foreach ($this->entities() as $element => $class) {
            if (in_array($element, $except)) {
                continue;
            }
            if ($campaign->enabled($element)) {
                $entityTypes[] = $this->singular($element);
            }
        }
        return $entityTypes;
    }

    /**
     * @param bool $singular
     * @param array $except
     * @return array
     */
    public function getEnabledEntitiesSorted(bool $singular = true, array $except = []): array
    {
        $entityTypes = [];
        foreach ($this->entities() as $element => $class) {
            if (in_array($element, $except)) {
                continue;
            }
            if ($this->campaign->enabled($element)) {
                /** @var MiscModel|mixed $misc */
                $misc = new $class();
                if ($singular) {
                    $entityTypes[$this->singular($element)] = Module::singular($misc->entityTypeId(), __('entities.' . $this->singular($element)));
                } else {
                    $entityTypes[$this->singular($element)] = Module::plural($misc->entityTypeId(), __('entities.' . $element));
                }
            }
        }

        $collator = new \Collator(app()->getLocale());
        $collator->asort($entityTypes);

        return $entityTypes;
    }

    /**
     * @param array $except
     * @return array
     */
    public function getEnabledEntitiesID(array $except = []): array
    {
        $types = $this->getEnabledEntities($this->campaign, $except);
        $ids = [];
        foreach ($types as $type) {
            $ids[] = config('entities.ids.' . $type);
        }

        return $ids;
    }
}
