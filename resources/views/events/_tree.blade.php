@inject ('datagrid', 'App\Renderers\DatagridRenderer')

{!! $datagrid
    ->nested()
    ->service($filterService)
    ->models($models)
    ->columns([
        [
            'type' => 'avatar'
        ],
        'name',
        'type',
        'date',
        [
            'type' => 'location',
            'visible' => $campaignService->enabled('locations'),
        ],
        [
            'label' => \App\Facades\Module::plural(config('entities.ids.event'), __('entities.events')),
            'field' => 'event.name',
            'render' => function($model) {
                return $model->descendants->count();
            },
            'disableSort' => true,
        ],
        [
            'type' => 'is_private',
        ]
    ])
    ->options([
        'route' => 'events.tree',
        'baseRoute' => 'events',
        'trans' => 'events.fields.',
        'campaignService' => $campaignService,
        'row' => [
            'data' => [
                'data-children' => function($model) {
                    return $model->events->count();
                }
            ]
        ]
    ]
) !!}
