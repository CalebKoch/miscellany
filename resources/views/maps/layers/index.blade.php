<?php /** @var \App\Models\Map $model */?>
@extends('layouts.app', [
    'title' => __('maps/layers.index.title', ['name' => $model->name]),
    'description' => '',
    'breadcrumbs' => false,
    'mainTitle' => false,
    'miscModel' => $model,
])

@inject('campaignService', 'App\Services\CampaignService')

@section('entity-header-actions')
    @can('update', $model)
        <div class="header-buttons inline-block pull-right ml-auto">
            <a href="https://docs.kanka.io/en/latest/entities/maps/layers.html" class="btn btn-default btn-sm" target="_blank">
                <x-icon class="question"></x-icon>
                {{ __('crud.actions.help') }}
            </a>
            @if ($model->explorable())
                <a href="{{ route('maps.explore', ['map' => $model]) }}" class="btn btn-primary btn-sm">
                    <x-icon class="map"></x-icon>
                    {{ __('maps.actions.explore') }}
                </a>
            @endif
            <a href="{{ route('maps.map_layers.create', ['map' => $model]) }}" class="btn btn-warning btn-sm"
                data-url="{{ route('maps.map_layers.create', ['map' => $model]) }}"
            >
            <x-icon class="plus"></x-icon>
                {{ __('maps/layers.actions.add') }}
            </a>
        </div>
    @endcan
@endsection

@section('content')
    <div class="entity-grid">
        @include('entities.components.header', [
            'model' => $model,
            'breadcrumb' => [
                ['url' => Breadcrumb::index('maps'), 'label' => \App\Facades\Module::plural(config('entities.ids.map'), __('entities.maps'))],
                __('maps.panels.layers')
            ]
        ])
        @include('entities.components.menu_v2', ['active' => 'layers'])
        <div class="entity-main-block">
            @include('maps.panels.layers')
            @includeWhen($rows->count() > 1, 'maps.layers._reorder')
        </div>
    </div>
@endsection
