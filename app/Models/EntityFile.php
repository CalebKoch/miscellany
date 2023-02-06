<?php

namespace App\Models;

use App\Facades\Img;
use App\Models\Concerns\Blameable;
use App\Models\Concerns\EntityAsset;
use App\Traits\VisibilityIDTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * Class Attribute
 * @package App\Models
 *
 * @property integer $id
 * @property integer $entity_id
 * @property string $name
 * @property string $path
 * @property string $type
 * @property integer $size
 * @property boolean $is_private
 * @property string $visibility
 */
class EntityFile extends Model
{
    use Blameable;
    use EntityAsset
    ;
    /**
     * Traits
     */
    use VisibilityIDTrait;

    /** @var string[]  */
    protected $fillable = [
        'entity_id',
        'name',
        'is_private',
        'visibility_id',
    ];

    /** EntityAsset booleans */
    protected $isFile = true;
    protected $isLink = false;
    protected $isAlias = false;

    /**
     * Trigger for filtering based on the order request.
     * @var string
     */
    protected $orderTrigger = 'files/';

    /**
     * Searchable fields
     * @var array
     */
    protected array $searchableColumns = [
        'name'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function entity()
    {
        return $this->belongsTo('App\Models\Entity', 'entity_id');
    }

    /**
     * @return bool
     */
    public function isImage(): bool
    {
        return Str::startsWith($this->type, 'image/');
    }

    /**
     * @return string
     */
    public function imageUrl(): string
    {
        return Img::crop(120, 80)->url($this->path);
    }
}
