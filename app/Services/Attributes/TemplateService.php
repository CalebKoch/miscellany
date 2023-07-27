<?php

namespace App\Services\Attributes;

use App\Models\Attribute;
use App\Models\AttributeTemplate;
use App\Models\Campaign;
use App\Models\CampaignPlugin;
use App\Models\Entity;
use App\Traits\EntityAware;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class TemplateService
{
    use EntityAware;

    protected array $loadedTemplates = [];
    protected array $loadedPlugins = [];

    public function apply(mixed $templateId)
    {
        $templateIdInt = (int) $templateId;
        if (Str::isUuid($templateId)) {
            return $this->applyMarketplaceTemplate($templateId, $this->entity);
        } elseif (is_integer($templateIdInt) && !empty($templateIdInt)) {
            /** @var AttributeTemplate $template */
            $template = $this->getAttributeTemplate($templateId);
            $template->apply($this->entity);
            return $template->name;
        }
        return false;
    }
    /**
     * Apply a marketplace character sheet on an entity based on its uuid.
     * @todo: move to a separate service
     * @param string $uuid
     * @param Entity $entity
     * @return false|\Illuminate\Database\Eloquent\HigherOrderBuilderProxy|mixed
     */
    public function applyMarketplaceTemplate(string $uuid, Entity $entity)
    {
        $campaign = $entity->campaign;
        if (!$campaign->boosted()) {
            return false;
        }

        $plugin = $this->getMarketplacePlugin($uuid, $campaign);
        if (empty($plugin)) {
            return false;
        }

        $order = $entity->attributes()->count();
        $existing = array_values($entity->attributes()->pluck('name')->toArray());
        foreach ($plugin->version->attributes as $attribute) {
            // If the config is simply a name, we default to a small varchar
            if (!is_array($attribute)) {
                continue;
            }

            // Don't re-create existing attributes.
            $name = Arr::get($attribute, 'name', 'unknown');
            if (in_array($name, $existing)) {
                continue;
            }
            $type = Arr::get($attribute, 'type', '');
            $type = $this->mapAttributeTypeToID($type);
            $value = Arr::get($attribute, 'value', '');

            list($type, $value) = $this->randomService->randomAttribute($type, $value);

            $order++;

            Attribute::create([
                'entity_id' => $entity->id,
                'name' => $name,
                'value' => $value,
                'default_order' => $order,
                'is_private' => false,
                'type_id' => $type,
                'is_pinned' => false,
                'is_hidden' => Arr::get($attribute, 'is_hidden', false)
            ]);
        }

        // Layout attribute for rendering
        $layout = '_layout';
        if (!in_array($layout, $existing)) {
            $order++;

            Attribute::create([
                'entity_id' => $entity->id,
                'name' => '_layout',
                'value' => $plugin->version->uuid,
                'default_order' => $order,
                'is_private' => false,
                'is_pinned' => false,
                'type_id' => Attribute::TYPE_STANDARD_ID,
            ]);
        }

        return $plugin->plugin->name;
    }

    /**
     * Get a character sheet marketplace plugin model from the db based on its uuid
     * @param string $uuid
     * @param Campaign $campaign
     * @return CampaignPlugin|null
     */
    public function marketplaceTemplate($uuid, Campaign $campaign)
    {
        if (!$campaign->boosted() || !config('marketplace.enabled')) {
            return null;
        }

        if (!Str::isUuid($uuid)) {
            return null;
        }

        /** @var CampaignPlugin|null $plugin */
        // @phpstan-ignore-next-line
        $plugin = CampaignPlugin::templates($campaign)
            ->select('campaign_plugins.*')
            ->leftJoin('plugin_versions as pv', 'pv.plugin_id', 'campaign_plugins.plugin_id')
            ->where('pv.uuid', $uuid)
            ->has('plugin')
            ->first();

        // If the plugin is published, we're good. Otherwise, it's
        if (empty($plugin) || !$plugin->renderable()) {
            return null;
        }

        return $plugin;
    }

    /**
     * Get an attribute template model from the campaign based on its ID
     * @param int $templateId
     * @return AttributeTemplate
     */
    protected function getAttributeTemplate(int $templateId)
    {
        if (isset($this->loadedTemplates[$templateId])) {
            return $this->loadedTemplates[$templateId];
        }
        /** @var AttributeTemplate $attributeTemplate */
        $attributeTemplate = AttributeTemplate::findOrFail($templateId);
        return $this->loadedTemplates[$templateId] = $attributeTemplate;
    }

    /**
     * Get a marketplace plugin's model based on its UUID
     * @param string $pluginUuid
     * @param Campaign $campaign
     * @return CampaignPlugin|null
     */
    protected function getMarketplacePlugin(string $pluginUuid, Campaign $campaign)
    {
        if (isset($this->loadedPlugins[$pluginUuid])) {
            return $this->loadedPlugins[$pluginUuid];
        }
        return $this->loadedPlugins[$pluginUuid] = CampaignPlugin::templates($campaign)
            ->select('campaign_plugins.*')
            //->leftJoin('plugins as p', 'p.id', 'plugin_id')
            ->where('p.uuid', $pluginUuid)
            ->first();
    }
}
