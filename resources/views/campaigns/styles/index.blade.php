<?php /** @var \App\Models\CampaignStyle $style */
use App\Facades\Datagrid ?>
@extends('layouts.app', [
    'title' => __('campaigns/styles.title', ['campaign' => $campaign->name]),
    'breadcrumbs' => [
        ['url' => route('campaign'), 'label' => __('entities.campaign')],
        __('campaigns.show.tabs.styles')
    ],
    'mainTitle' => false,
])

@section('content')
    @include('partials.errors')

    <div class="flex gap-2 flex-col lg:flex-row lg:gap-5">
        <div class="lg:flex-none lg:w-60">
            @include('campaigns._menu', ['active' => 'styles'])
        </div>
        <div class="grow">
            <div class="flex gap-2 mb-5 items-center">
                <h3 class="m-0 inline-block grow">
                    {{ __('campaigns.show.tabs.styles') }}
                </h3>
                @if ($campaign->boosted())
                    <button class="btn btn-sm btn-default pull-right ml-1" data-toggle="dialog"
                            data-target="theming-help">
                        <i class="fa-solid fa-question-circle" aria-hidden="true"></i>
                        {{ __('campaigns.members.actions.help') }}
                    </button>
                    <a href="#" data-url="{{ route('campaign-theme') }}" data-target="#entity-modal" data-toggle="ajax-modal" class="btn btn-default btn-sm pull-right ml-1">
                        <i class="fa-solid fa-brush"></i> {{ __('campaigns/styles.actions.current', ['theme' => !empty($theme) ? $theme->__toString() : __('crud.filters.options.none')]) }}
                    </a>

                    <a href="{{ route('campaign_styles.create') }}" class="btn btn-primary btn-sm pull-right ml-1">
                        <i class="fa-solid fa-plus" aria-hidden="true"></i> {{ __('campaigns/styles.actions.new') }}
                    </a>
                @endif
            </div>
            @if (!$campaign->boosted())
                @include('layouts.callouts.boost', ['texts' => [__('campaigns/styles.pitch')]])
            @else
            <div class="box box-solid">
                @if ($styles->count() === 0)
                    <div class="box-body">
                        <p class="help-block">
                            {!! __('campaigns/styles.helpers.main', ['here' => link_to('https://blog.kanka.io/category/tutorials', __('campaigns/styles.helpers.here'), ['target' => '_blank'])]) !!}
                        </p>
                    </div>
                @else
                    @if(Datagrid::hasBulks()) {!! Form::open(['route' => 'campaign_styles.bulk']) !!} @endif
                    <div id="datagrid-parent">
                        @include('campaigns.styles._table')
                    </div>
                    @if(Datagrid::hasBulks()) {!! Form::close() !!} @endif
                @endif
            </div>

                @includeWhen(!$reorderStyles->isEmpty(), 'campaigns.styles._reorder')
            @endif
        </div>
    </div>
@endsection


@section('modals')

    @include('layouts.datagrid.delete-forms', ['models' => Datagrid::deleteForms()])


    @include('partials.helper-modal', [
        'id' => 'theming-help',
        'title' => __('campaigns.show.tabs.styles'),
        'textes' => [
            __('campaigns/styles.helpers.main', ['here' => link_to('https://blog.kanka.io/category/tutorials', __('campaigns/styles.helpers.here'), ['target' => '_blank'])]),
    ]])

@endsection
