@extends('layouts.app', [
    'title' => __('locations.locations.title', ['name' => $model->name]),
    'breadcrumbs' => false,
    'canonical' => true,
    'mainTitle' => false,
    'miscModel' => $model,
])


@section('content')
    @include('partials.errors')

    <div class="entity-grid">
        @include('entities.components.header', [
            'model' => $model,
            'breadcrumb' => [
                ['url' => Breadcrumb::index('locations'), 'label' => __('entities.locations')],
                __('entities.locations')
            ]
        ])

        @include('locations._menu', ['active' => 'locations'])

        <div class="entity-main-block">
            @include('locations.panels.locations')
        </div>
    </div>
@endsection
