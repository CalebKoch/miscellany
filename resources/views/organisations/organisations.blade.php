@extends('layouts.app', [
    'title' => trans('organisations.organisations.title', ['name' => $model->name]),
    'breadcrumbs' => false,
    'mainTitle' => false,
    'miscModel' => $model,
])

@inject('campaignService', 'App\Services\CampaignService')

@section('entity-header-actions')
    <div class="header-buttons inline-block pull-right ml-auto">
        @if (request()->has('parent_id'))
            <a href="{{ route('organisations.organisations', [$model]) }}" class="btn btn-default btn-sm">
                <i class="fa-solid fa-filter" aria-hidden="true"></i> {{ __('crud.filters.all') }} ({{ $model->descendants()->count() }})
            </a>
        @else
            <a href="{{ route('organisations.organisations', [$model, 'parent_id' => $model->id]) }}" class="btn btn-default btn-sm">
                <i class="fa-solid fa-filter" aria-hidden="true"></i> {{ __('crud.filters.direct') }} ({{ $model->organisations()->count() }})
            </a>
        @endif
    </div>
@endsection

@php
    $plural = \App\Facades\Module::plural(config('entities.ids.organisation'), __('entities.organisations'));
@endphp
@section('content')
    @include('partials.errors')

    <div class="entity-grid">
        @include('entities.components.header', [
            'model' => $model,
            'breadcrumb' => [
                ['url' => Breadcrumb::index('organisations'), 'label' => $plural],
                $plural
            ]
        ])

        @include('entities.components.menu_v2', ['active' => 'organisations'])

        <div class="entity-main-block">
            @include('organisations.panels.organisations')
        </div>
    </div>
@endsection
