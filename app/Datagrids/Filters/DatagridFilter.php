<?php

namespace App\Datagrids\Filters;

use App\Facades\Module;
use App\Models\Character;
use App\Models\Journal;
use App\Models\Location;
use App\Models\Tag;
use App\Traits\CampaignAware;
use Illuminate\Support\Facades\Auth;

/**
 * This abstract class sets up all the stuff needed for rendering filters on entity datagrids.
 * Each entity has a class that extends this class and in the constructor sets the fields available.
 * Filters that are re-used multiple times or have their own rendering logic are added as functions
 * directly on this class.
 */
abstract class DatagridFilter
{
    use CampaignAware;

    /** @var array Filters to be rendered */
    protected array $filters = [];

    public function build()
    {
    }

    /**
     * Get the filters
     */
    public function filters(): array
    {
        return $this->filters;
    }

    /**
     * @param string|array $name
     * @return $this
     */
    protected function add($name): self
    {
        $this->filters[] = $name;
        return $this;
    }

    /**
     * Add the location filters
     * @return $this
     */
    protected function location(): self
    {
        $name = Module::singular(config('entities.ids.location'));
        $placeholder = __('crud.placeholders.location');
        if (!empty($name)) {
            $placeholder = __('crud.placeholders.fallback', ['module' => $name]);
        }
        $this->filters[] = [
            'field' => 'location_id',
            'label' => Module::singular(config('entities.ids.location'), __('entities.location')),
            'type' => 'select2',
            'route' => route('locations.find', $this->campaign),
            'placeholder' =>  $placeholder,
            'model' => Location::class,
            'withChildren' => true,
        ];
        return $this;
    }

    /**
     * Add the character filters
     * @return $this
     */
    protected function character(string $field = 'character_id'): self
    {
        $name = Module::singular(config('entities.ids.character'));
        $placeholder = __('crud.placeholders.character');
        if (!empty($name)) {
            $placeholder = __('crud.placeholders.fallback', ['module' => $name]);
        }
        $this->filters[] = [
            'field' => $field,
            'label' => Module::singular(config('entities.ids.character'), __('entities.character')),
            'type' => 'select2',
            'route' => route('characters.find', $this->campaign),
            'placeholder' =>  $placeholder,
            'model' => Character::class,
        ];
        return $this;
    }

    /**
     * Add the character filters
     * @return $this
     */
    protected function journal(): self
    {
        $name = Module::singular(config('entities.ids.journal'));
        $placeholder = __('crud.placeholders.journal');
        if (!empty($name)) {
            $placeholder = __('crud.placeholders.fallback', ['module' => $name]);
        }
        $this->filters[] = [
            'field' => 'journal_id',
            'label' => Module::singular(config('entities.ids.journal'), __('entities.journal')),
            'type' => 'select2',
            'route' => route('journals.find', $this->campaign),
            'placeholder' =>  $placeholder,
            'model' => Journal::class,
        ];
        return $this;
    }

    /**
     * Add the tags filters
     * @return $this
     */
    protected function tags(): self
    {
        $name = Module::singular(config('entities.ids.tag'));
        $placeholder = __('crud.placeholders.tag');
        if (!empty($name)) {
            $placeholder = __('crud.placeholders.fallback', ['module' => $name]);
        }
        $this->filters[] = [
            'field' => 'tags',
            'label' => Module::singular(config('entities.ids.tag'), __('entities.tag')),
            'type' => 'tag',
            'route' => route('tags.find', $this->campaign),
            'placeholder' =>  $placeholder,
            'model' => Tag::class,
        ];
        return $this;
    }

    /**
     * Add the is_private
     * @return $this
     */
    protected function isPrivate(): self
    {
        // Add the is_private filter only for admins.
        if (Auth::check() && Auth::user()->isAdmin()) {
            $this->filters[] = 'is_private';
        }

        return $this;
    }

    /**
     * Add the entity has an image
     * @return $this
     */
    protected function hasImage(): self
    {
        $this->filters[] = 'has_image';
        return $this;
    }

    /**
     * Add the entity has posts
     * @return $this
     */
    protected function hasPosts(): self
    {
        $this->filters[] = 'has_posts';
        return $this;
    }

    /**
     * Add the entity has attributes
     * @return $this
     */
    protected function hasAttributes(): self
    {
        $this->filters[] = 'has_attributes';
        return $this;
    }

    /**
     * Add the has image
     * @return $this
     */
    protected function hasEntityFiles(): self
    {
        $this->filters[] = 'has_entity_files';
        return $this;
    }

    /**
     * Add the (real) date filter
     * @return $this
     */
    protected function date(): self
    {
        $this->filters[] = 'date';
        return $this;
    }

    /**
     * Add the attributes selector
     * @return $this
     */
    protected function attributes(): self
    {
        $this->filters[] = 'attributes';
        return $this;
    }

    /**
     * Add the connection selector
     * @return $this
     */
    protected function connections(): self
    {
        $this->filters[] = 'connections';
        return $this;
    }

    /**
     * Add the date range filter
     * @return $this
     */
    protected function dateRange(): self
    {
        $this->filters[] = 'date_range';
        return $this;
    }

    /**
     * Add the is template filter
     * @return $this
     */
    protected function template(): self
    {
        $this->filters[] = 'template';
        return $this;
    }
}
