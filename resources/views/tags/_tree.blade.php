@inject ('datagrid', 'App\Renderers\DatagridRenderer')

{!! $datagrid->filters($filters)
    ->nested()
    ->render(
    $filterService,
    // Columns
    [
        // Avatar
        [
            'type' => 'avatar'
        ],
        // Name
        'name',
        'type',
        [
            'label' => __('calendars.fields.colour'),
            'field' => 'tag.colour',
            'render' => function ($model) {
                /** @var \App\Models\Tag $model */
                if (!$model->hasColour()) {
                    return '';
                }
                return '<span class="' . $model->colourClass() . '">' . __('colours.' . $model->colour) . '</span>';
            }
        ],
        [
            'label' => trans('tags.fields.tag'),
            'render' => function($model) {
                if ($model->tag) {
                    return '<a href="' . route('tags.show', $model->tag->id) . '">' . e($model->tag->name) . '</a>';
                }
            },
            'field' => 'tag.name',
        ],
        [
            'label' => trans('tags.fields.tags'),
            'render' => function($model) {
                return $model->tags->count();
            },
            'disableSort' => true,
        ],
        [
            'label' => trans('tags.fields.children'),
            'render' => function($model) {
                $total = $model->allChildren()->count();
                return $total;
            },
            'disableSort' => true,
        ],
        [
            'label' => '<i class="fa-solid fa-tag" title="' . __('tags.fields.is_auto_applied') . '"></i>',
            'field' => 'is_auto_applied',
            'render' => function($model) {
                if ($model->isAutoApplied()) {
                    return '<i class="fa-solid fa-tag" title="' . __('tags.fields.is_auto_applied') . '"></i>';
                }
                return '';
            },
            'class' => 'icon'
        ],
        [
            'type' => 'is_private',
        ]
    ],
    // Data
    $models,
    // Options
    [
        'route' => 'tags.tree',
        'baseRoute' => 'tags',
        'trans' => 'tags.fields.',
        'row' => [
            'data' => [
                'data-children' => function($model) {
                    return $model->tags->count();
                }
            ]
        ]
    ]
) !!}
