<?php
/**
* @var \App\Models\Timeline $timeline
* @var \App\Models\TimelineElement $model
*/
?>
@extends('layouts.' . (request()->ajax() ? 'ajax' : 'app'), [
    'title' => __('timelines/elements.edit.title', ['name' => $model->name]),
    'description' => '',
    'breadcrumbs' => [
        ['url' => Breadcrumb::index('timelines'), 'label' => \App\Facades\Module::plural(config('entities.ids.timeline'), __('entities.timelines'))],
        ['url' => $timeline->entity->url(), 'label' => $timeline->name],
        __('timelines/elements.edit.title', ['name' => $model->name])
    ]
])

@inject('campaignService', 'App\Services\CampaignService')

@section('content')
    @include('partials.errors')

    {!! Form::model($model, ['route' => ['timelines.timeline_elements.update', 'timeline' => $timeline, 'timeline_element' => $model], 'method' => 'PATCH', 'id' => 'timeline-element-form', 'enctype' => 'multipart/form-data', 'class' => 'ajax-subform', 'data-shortcut' => 1, 'data-maintenance' => 1]) !!}
    <x-box>
        @include('timelines.elements._form')

        <x-dialog.footer>
            <div class="form-element">
                <div class="submit-group">
                    <button class="btn2 btn-primary">{{ trans('crud.save') }}</button>
                </div>
                <div class="submit-animation" style="display: none;">
                    <button class="btn2 btn-primary" disabled>
                        <i class="fa-solid fa-spinner fa-spin"></i>
                    </button>
                </div>
            </div>
        </x-dialog.footer>
    </x-box>
    {!! Form::close() !!}

    @if(!empty($model) && $campaignService->campaign()->hasEditingWarning())
        <input type="hidden" id="editing-keep-alive" data-url="{{ route('timeline-elements.keep-alive', $model->id) }}" />
    @endif
@endsection

@section('scripts')
    @parent
    @vite(['resources/js/ajax-subforms.js'])
@endsection

@section('modals')
    @parent
    @includeWhen(!empty($editingUsers) && !empty($model), 'cruds.forms.edit_warning', ['model' => $model])
@endsection
