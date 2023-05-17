<?php /** @var \App\Models\Entity $entity
 * @var \App\Models\Inventory $item */?>
@extends('layouts.' . ($ajax ? 'ajax' : 'app'), [
    'title' => __('entities/attributes.show.title', ['name' => $entity->name]),
    'description' => '',
    'breadcrumbs' => false,
    'mainTitle' => false,
    'miscModel' => $entity->child,
    'bodyClass' => 'entity-attributes'
])
@inject('campaignService', 'App\Services\CampaignService')


@section('entity-header-actions')
    @can('attribute', [$entity->child, 'add'])
        <div class="header-buttons inline-block pull-right ml-auto">
            <a class="btn btn-sm btn-default" href="{{ route('entities.attributes.template', $entity) }}" data-toggle="ajax-modal" data-target="#entity-modal" data-url="{{ route('entities.attributes.template', $entity) }}">
                <i class="fa-solid fa-copy" aria-hidden="true"></i> {{ __('entities/attributes.actions.apply_template') }}
            </a>

            <a href="{{ route('entities.attributes.edit', ['entity' => $entity]) }}" class="btn btn-sm btn-warning">
                <i class="fa-solid fa-list" aria-hidden="true"></i> {{ __('entities/attributes.actions.manage') }}
            </a>
        </div>
    @endcan
@endsection


@section('content')
    @include('partials.errors')
    @include('partials.ads.top')

    <div class="entity-grid">
        @include('entities.components.header', [
            'model' => $entity->child,
            'entity' => $entity,
            'breadcrumb' => [
                ['url' => Breadcrumb::index($entity->pluralType()), 'label' => \App\Facades\Module::plural($entity->typeId(), __('entities.' . $entity->pluralType()))],
                __('crud.tabs.attributes')
            ]
        ])

        @include('entities.components.menu_v2', [
            'active' => 'attributes',
            'model' => $entity->child,
        ])

        <div class="entity-main-block">
            <div class="box box-solid box-entity-attributes">
                <div class="box-body">
            @include('entities.pages.attributes.render')
                </div>
            </div>
        </div>

        <input type="hidden" name="live-attribute-config" data-live="{{ route('entities.attributes.live.edit', $entity) }}" />
    </div>
@endsection


@section('scripts')
    @parent
    @vite('resources/js/attributes.js')
@endsection

@section('modals')
    @parent
    <div class="modal fade" id="live-attribute-modal" role="dialog" aria-labelledby="deleteConfirmLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content"></div>
        </div>
    </div>
@endsection
