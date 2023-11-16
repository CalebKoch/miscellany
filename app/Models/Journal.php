<?php

namespace App\Models;

use App\Facades\Module;
use App\Models\Concerns\Acl;
use App\Models\Concerns\Nested;
use App\Models\Concerns\SortableTrait;
use App\Traits\CalendarDateTrait;
use App\Traits\CampaignTrait;
use App\Traits\ExportableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class Journal
 * @package App\Models
 *
 * @property int $id
 * @property string $date
 * @property int|null $character_id
 * @property int|null $journal_id
 * @property int|null $author_id
 * @property Character|null $character
 * @property Entity|null $author
 * @property Journal|null $journal
 * @property Journal[] $journals
 * @property Journal[] $descendants
 */
class Journal extends MiscModel
{
    use Acl;
    use CalendarDateTrait;
    use CampaignTrait;
    use ExportableTrait;
    use HasFactory;
    use Nested;
    use SoftDeletes;
    use SortableTrait;

    /** @var string[]  */
    protected $fillable = [
        'name',
        'campaign_id',
        'slug',
        'type',
        'entry',
        'date',
        'character_id',
        'location_id',
        'is_private',
        'journal_id',
        'author_id',
    ];

    /**
     * Entity type
     */
    protected string $entityType = 'journal';

    /**
     * Fields that can be sorted on
     */
    protected array $sortableColumns = [
        'date',
        'calendar_date',
        'author.name',
    ];
    protected array $sortable = [
        'name',
        'date',
        'character.name',
        //'character.name',
    ];

    /**
     * Nullable values (foreign keys)
     * @var string[]
     */
    public array $nullableForeignKeys = [
        'location_id',
        //'character_id',
        'calendar_id',
        'journal_id',
        'author_id',
    ];

    protected array $apiWith = [
        'author',
        'entity.calendarDate',
    ];

    public array $exportFields = [
        'base',
        'author_id',
        'location_id',
        'date',
    ];

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
            'entity.calendarDate',
            'author',
            'location' => function ($sub) {
                $sub->select('id', 'name');
            },
            'location.entity' => function ($sub) {
                $sub->select('id', 'name', 'entity_id', 'type_id');
            },
            'journal' => function ($sub) {
                $sub->select('id', 'name');
            },
            'journal.entity' => function ($sub) {
                $sub->select('id', 'name', 'entity_id', 'type_id');
            },
            'journals' => function ($sub) {
                $sub->select('id', 'journal_id', 'name');
            },
            'children' => function ($sub) {
                $sub->select('id', 'journal_id');
            }
        ]);
    }

    /**
     * Only select used fields in datagrids
     */
    public function datagridSelectFields(): array
    {
        return ['journal_id', 'author_id', 'date', 'calendar_id', 'calendar_year', 'calendar_month', 'calendar_day'];
    }

    /**
     */
    public function menuItems(array $items = []): array
    {
        $items['second']['journals'] = [
            'name' => Module::plural($this->entityTypeId(), 'entities.journals'),
            'route' => 'journals.journals',
            'count' => $this->descendants()->count()
        ];
        return parent::menuItems($items);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function journal()
    {
        return $this->belongsTo(Journal::class);
    }

    public function journals()
    {
        return $this->hasMany(Journal::class);
    }
    /**
     * Get all journals in the journal and descendants
     */
    public function allJournals()
    {
        $locationIds = [$this->id];
        foreach ($this->descendants as $descendant) {
            $locationIds[] = $descendant->id;
        };

        $table = new Journal();
        return Journal::whereIn($table->getTable() . '.journal_id', $locationIds)->with('journal');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function character()
    {
        return $this->belongsTo('App\Models\Character', 'character_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo('App\Models\Entity', 'author_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function location()
    {
        return $this->belongsTo('App\Models\Location', 'location_id');
    }

    /**
     * Get the entity_type id from the entity_types table
     */
    public function entityTypeId(): int
    {
        return (int) config('entities.ids.journal');
    }

    /**
     * Parent ID field for the Node trait
     * @return string
     */
    public function getParentIdName()
    {
        return 'journal_id';
    }

    /**
     * Specify parent id attribute mutator
     * @param int $value
     */
    public function setJournalIdAttribute($value)
    {
        $this->setParentIdAttribute($value);
    }

    /**
     * Determine if the model has profile data to be displayed
     */
    public function showProfileInfo(): bool
    {
        if (!empty($this->type) || !empty($this->date)) {
            return true;
        }

        if (!empty($this->author) || !empty($this->location)) {
            return true;
        }
        return (bool) (!empty($this->calendarReminder()));
    }

    /**
     * Define the fields unique to this model that can be used on filters
     * @return string[]
     */
    public function filterableColumns(): array
    {
        return [
            'date',
            'character_id',
            'location_id',
            'journal_id',
            'author_id',
            'date_start',
            'date_end',
        ];
    }

    /**
     * Grid mode sortable fields
     */
    public function datagridSortableColumns(): array
    {
        $columns = [
            'name' => __('crud.fields.name'),
            'type' => __('crud.fields.type'),
            'date' => __('journals.fields.date'),
            'calendar_date' => __('crud.fields.calendar_date'),
        ];

        if (auth()->check() && auth()->user()->isAdmin()) {
            $columns['is_private'] = __('crud.fields.is_private');
        }
        return $columns;
    }
}
