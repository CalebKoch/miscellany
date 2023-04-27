@extends('layouts.app', [
    'title' => __('families.members.title', ['name' => $model->name]),
    'breadcrumbs' => false,
    'mainTitle' => false,
    'miscModel' => $model,
])

@inject('campaignService', 'App\Services\CampaignService')

@section('content')
    @include('partials.errors')

    <div class="entity-grid">
        @include('entities.components.header', [
            'model' => $model,
            'breadcrumb' => [
                ['url' => Breadcrumb::index('families'), 'label' => \App\Facades\Module::plural(config('entities.ids.family'), __('entities.families'))],
                null
            ]
        ])

        @include($name . '._menu', ['active' => 'members'])

        <div class="entity-main-block">
            @include('families.panels._members')
        </div>
    </div>
@endsection
