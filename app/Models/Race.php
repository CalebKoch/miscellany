<?php

namespace App\Models;

use App\Enums\FilterOption;
use App\Facades\Module;
use App\Models\Concerns\Acl;
use App\Models\Concerns\HasFilters;
use App\Models\Concerns\SortableTrait;
use App\Traits\CampaignTrait;
use App\Traits\ExportableTrait;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

/**
 * Class Race
 * @package App\Models
 *
 * @property Race[]|Collection $descendants
 *
 * @property int|null $race_id
 * @property Race|null $race
 * @property Race[] $races
 * @property Location|null $location
 * @property Collection|Location[] $locations
 */
class Race extends MiscModel
{
    use Acl;
    use CampaignTrait;
    use ExportableTrait;
    use HasFactory;
    use HasFilters;
    use HasRecursiveRelationships;
    use SoftDeletes;
    use SortableTrait;

    protected $fillable = [
        'name',
        'campaign_id',
        'slug',
        'type',
        'entry',
        'is_private',
        'race_id',
    ];

    /**
     * Entity type
     */
    protected string $entityType = 'race';

    protected array $sortable = [
        'name',
        'type',
        'parent.name',
    ];

    /**
     * Nullable values (foreign keys)
     * @var string[]
     */
    public array $nullableForeignKeys = [
        'race_id',
    ];

    /**
     * Foreign relations to add to export
     */
    protected array $foreignExport = [
        'pivotLocations',
    ];

    /**
     * @return string
     */
    public function getParentKeyName()
    {
        return 'race_id';
    }

    /**
     * Performance with for datagrids
     */
    public function scopePreparedWith(Builder $query): Builder
    {
        return $query->with([
            'entity' => function ($sub) {
                $sub->select('id', 'name', 'entity_id', 'type_id', 'image_path', 'image_uuid', 'focus_x', 'focus_y');
            },
            'entity.image' => function ($sub) {
                $sub->select('campaign_id', 'id', 'ext', 'focus_x', 'focus_y');
            },
            'parent' => function ($sub) {
                $sub->select('id', 'name');
            },
            'parent.entity' => function ($sub) {
                $sub->select('id', 'name', 'entity_id', 'type_id');
            },
            'races' => function ($sub) {
                $sub->select('id', 'name', 'race_id');
            },
            'locations' => function ($sub) {
                $sub->select('locations.id', 'locations.name');
            },
            'characters',
            'children' => function ($sub) {
                $sub->select('id', 'race_id');
            },
        ]);
    }
    /**
     * Filter on races in specific locations
     */
    public function scopeLocation(Builder $query, int|null $race, FilterOption $filter): Builder
    {
        if ($filter === FilterOption::NONE) {
            /*if (!empty($location)) {
                return $query;
            }*/
            return $query
                ->whereRaw('(select count(*) from race_location as cl where cl.race_id = ' .
                    $this->getTable() . '.id and cl.location_id = ' . ((int) $race) . ') = 0');
        } elseif ($filter === FilterOption::EXCLUDE) {
            return $query
                ->whereRaw('(select count(*) from race_location as cl where cl.race_id = ' .
                    $this->getTable() . '.id and cl.location_id = ' . ((int) $race) . ') = 0');
        }

        $ids = [$race];
        if ($filter === FilterOption::CHILDREN) {
            /** @var Location|null $model */
            $model = Location::find($race);
            if (!empty($model)) {
                $ids = [...$model->descendants->pluck('id')->toArray(), $model->id];
            }
        }
        return $query
            ->select($this->getTable() . '.*')
            ->leftJoin('race_location as cl', function ($join) {
                $join->on('cl.race_id', '=', $this->getTable() . '.id');
            })
            ->whereIn('cl.location_id', $ids)->distinct();
    }

    /**
     * Only select used fields in datagrids
     */
    public function datagridSelectFields(): array
    {
        return ['race_id'];
    }

    /**
     * Characters belonging to this race
     */
    public function characters()
    {
        return $this->belongsToMany('App\Models\Character', 'character_race');
    }

    /**
     * Parent Race
     */
    public function race()
    {
        return $this->belongsTo('App\Models\Race', 'race_id', 'id');
    }

    /**
     * Children Races
     */
    public function races()
    {
        return $this->hasMany('App\Models\Race', 'race_id', 'id');
    }

    /**
     * Get all characters in the location and descendants
     */
    public function allCharacters()
    {
        $raceIds = [$this->id];
        foreach ($this->descendants as $descendant) {
            $raceIds[] = $descendant->id;
        };

        return Character::select('characters.*')
            ->distinct('characters.id')
            ->leftJoin('character_race as cr', function ($join) {
                $join->on('cr.character_id', '=', 'characters.id');
            })
            ->whereIn('cr.race_id', $raceIds);
    }

    /**
     * Get the entity_type id from the entity_types table
     */
    public function entityTypeId(): int
    {
        return (int) config('entities.ids.race');
    }

    /**
     * Define the fields unique to this model that can be used on filters
     * @return string[]
     */
    public function filterableColumns(): array
    {
        return [
            'race_id',
            'location_id',
            'parent'
        ];
    }

    /**
     * Races have multiple locations through the race_location table
     */
    public function locations(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\Location', 'race_location')
            ->with('entity');
    }

    public function pivotLocations(): HasMany
    {
        return $this->hasMany('App\Models\RaceLocation');
    }

    /**
     * Determine if the model has profile data to be displayed
     */
    public function showProfileInfo(): bool
    {
        if ($this->locations->isNotEmpty()) {
            return true;
        }

        return parent::showProfileInfo();
    }
}
