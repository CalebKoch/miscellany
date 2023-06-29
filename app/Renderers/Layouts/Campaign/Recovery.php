<?php

namespace App\Renderers\Layouts\Campaign;

use App\Facades\Module;
use App\Renderers\Layouts\Layout;

class Recovery extends Layout
{
    /**
     * Available columns
     * @return array[]
     */
    public function columns(): array
    {
        $columns = [
            'image' => [
                'class' => 'avatar w-14',
                'label' => '',
                'render' => function ($entity) {
                    $child = $entity->child()->withTrashed()->first();
                    if (empty($child)) {
                        return '';
                    }
                    $child->withEntity($entity);
                    return '<div style="background-image: url(' . $child->thumbnail() . ');" class="entity-image"></div>';
                },
            ],
            'name' => [
                'key' => 'name',
                'label' => 'crud.fields.name',
            ],
            'type' => [
                'key' => 'type_id',
                'label' => 'crud.fields.entity_type',
                'render' => function ($entity) {
                    return Module::singular($entity->typeID(), __('entities.' . $entity->type()));
                },
            ],
            'deleted' => [
                'key' => 'deleted_at',
                'label' => 'campaigns/recovery.fields.deleted',
                'class' => self::ONLY_DESKTOP,
                'render' => function ($model) {
                    return $model->deleted_at->diffForHumans();
                }
            ],
        ];

        return $columns;
    }

    /**
     * Bulk actions
     * @return array
     */
    public function bulks(): array
    {
        return [
            [
                'action' => 'recover',
                'label' => 'campaigns/recovery.actions.recover',
                'icon' => 'fa-solid fa-history',
                'can' => 'campaign:recover',
            ],
        ];
    }
}
