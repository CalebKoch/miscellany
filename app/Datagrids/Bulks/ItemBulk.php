<?php

namespace App\Datagrids\Bulks;

class ItemBulk extends Bulk
{
    protected array $fields = [
        'name',
        'type',
        'price',
        'size',
        'item_id',
        'location_id',
        'character_id',
        'tags',
        'private_choice',
    ];
}
