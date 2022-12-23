@extends('layouts.app', [
    'title' => __('settings.layout.title'),
    'breadcrumbs' => false,
    'sidebar' => 'settings',
    'noads' => true,
])

@section('content')
    @include('partials.errors')
    {!! Form::model(auth()->user(), ['method' => 'PATCH', 'route' => ['settings.appearance.update'], 'data-shortcut' => 1]) !!}
    <div class="box box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">
                {{ __('settings.layout.title') }}
            </h3>
        </div>
        <div class="box-body">
            <div class="grid grid-cols-2 gap-4 lg:grid-cols-3">
                <div class="form-group">
                    <label>{{ __('profiles.fields.theme') }}
                        <i class="fa-solid fa-question-circle hidden-xs hidden-sm" data-toggle="tooltip" title="{{ __('profiles.theme.helper')}}"></i>
                    </label>
                    {!! Form::select('theme', [
                        '' => __('profiles.theme.themes.default'),
                        'dark' => __('profiles.theme.themes.dark'),
                        'midnight' => __('profiles.theme.themes.midnight')
                    ], null, ['class' => 'form-control']) !!}
                    <p class="help-block visible-xs visible-sm">
                        {{ __('profiles.theme.helper')}}
                    </p>
                </div>

                <div class="form-group">
                    <label>
                        {{ __('profiles.settings.fields.pagination') }}
                        <i class="fa-solid fa-question-circle hidden-xs hidden-sm" data-toggle="tooltip" title="{{ __('profiles.appearance.helpers.pagination')}}"></i>
                    </label>
                    {!! Form::select('default_pagination', $pagination->options(), null, ['class' => 'form-control']) !!}
                    <p class="help-block visible-xs visible-sm">
                        {{ __('profiles.appearance.helpers.pagination')}}
                    </p>
                </div>

                <div class="form-group">
                    <label>
                        {{ __('profiles.settings.fields.date_format') }}
                        <i class="fa-solid fa-question-circle hidden-xs hidden-sm" data-toggle="tooltip" title="{{ __('profiles.appearance.helpers.date-format')}}"></i>
                    </label>
                    {!! Form::select('date_format', [
                        'Y-m-d' => 'Y-m-d',
                        'd.m.Y' => 'd.m.Y',
                        'd-m-y' => 'd-m-y',
                        'm/d/Y' => 'm/d/Y'

                    ], null, ['class' => 'form-control']) !!}

                    <p class="help-block visible-xs visible-sm">
                        {{ __('profiles.appearance.helpers.date-format')}}
                    </p>
                </div>

                <div class="form-group {{ $highlight === 'campaign-switcher' ? 'alert alert-info' : '' }}">
                    <label>
                        {{ __('profiles.settings.fields.campaign_switcher_order_by') }}
                        <i class="fa-solid fa-question-circle hidden-xs hidden-sm" data-toggle="tooltip" title="{{ __('profiles.appearance.helpers.campaign-order')}}"></i></label>
{!! Form::select('campaign_switcher_order_by', [
    null => __('profiles.campaign_switcher_order_by.default'),
    'alphabetical' => __('profiles.campaign_switcher_order_by.alphabetical'),
    'date_created' => __('profiles.campaign_switcher_order_by.date_created'),
    'date_joined' => __('profiles.campaign_switcher_order_by.date_joined'),
    'r_alphabetical' => __('profiles.campaign_switcher_order_by.r_alphabetical'),
    'r_date_created' => __('profiles.campaign_switcher_order_by.r_date_created'),
    'r_date_joined' => __('profiles.campaign_switcher_order_by.r_date_joined'),
], auth()->user()->campaignSwitcherOrderBy, ['class' => 'form-control']) !!}

                    <p class="help-block visible-xs visible-sm">
                        {{ __('profiles.appearance.helpers.campaign-order')}}
                    </p>
                </div>

                <div class="form-group">
                    <label>
                        {{ __('profiles.settings.fields.new_entity_workflow') }}
                        <i class="fa-solid fa-question-circle hidden-xs hidden-sm" data-toggle="tooltip" title="{{ __('profiles.settings.hints.new_entity_workflow') }}"></i>
                    </label>
                        {!! Form::select('new_entity_workflow', [
                                '' => __('profiles.workflows.default'),
                                'created' => __('profiles.workflows.created'),
                            ], null, ['class' => 'form-control']) !!}

                    <p class="help-block visible-xs visible-sm">{{ __('profiles.settings.hints.new_entity_workflow') }}</p>
                </div>

                <div class="form-group">
                    <label>
                        {{ __('profiles.settings.fields.editor') }}
                        <i class="fa-solid fa-question-circle hidden-xs hidden-sm" data-toggle="tooltip" title="{{ __('profiles.settings.helpers.editor_v2') }}"></i>
                    </label>
                    {!! Form::select('editor', [
                        '' => __('profiles.campaign_switcher_order_by.default') . ' (Summernote)',
                        'legacy' => __('profiles.editors.legacy'),
                    ], null, ['class' => 'form-control']) !!}

                    <p class="help-block visible-xs visible-sm">{{ __('profiles.settings.helpers.editor_v2') }}</p>
                </div>
            </div>


            <div class="form-group">
                {!! Form::hidden('default_nested', 0) !!}
                <label>
                    {!! Form::checkbox('default_nested', 1, auth()->user()->defaultNested) !!}
                    {{ __('profiles.settings.fields.default_nested') }}
                </label>
                <p class="help-block">{{ __('profiles.settings.hints.default_nested') }}</p>
            </div>

            <div class="form-group">
                {!! Form::hidden('advanced_mentions', 0) !!}
                <label>
                    {!! Form::checkbox('advanced_mentions', 1, auth()->user()->alwaysAdvancedMentions()) !!}
                    {{ __('profiles.settings.fields.advanced_mentions') }}
                </label>
                <p class="help-block">{{ __('profiles.settings.hints.advanced_mentions') }}</p>
            </div>
        </div>

        <div class="box-footer text-right">
            <button class="btn btn-primary">
                {{ __('crud.save') }}
            </button>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
