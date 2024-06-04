@extends('layouts.app', [
    'title' => __('entities/move.title', ['name' => $entity->name]),
    'breadcrumbs' => [
        Breadcrumb::entity($entity)->list(),
        Breadcrumb::show(),
        __('crud.actions.move'),
    ],
    'centered' => true,
])

@section('content')
    @include('partials.errors')
    {!! Form::open(['route' => ['entities.move', $campaign, $entity->id], 'method' => 'POST']) !!}

    {{ csrf_field() }}
    <x-box>
        <x-grid type="1/1">
            <p class="text-neutral-content">
                {{ __('entities/move.panel.description') }}
            </p>

            <x-forms.field field="campaign" :label="__('entities/move.fields.campaign')">
                {!! Form::select('campaign', $campaigns, null, ['class' => '']) !!}
            </x-forms.field>

            @can('update', $entity->child)
                <x-forms.field field="copy" css="form-check" :label="__('entities/move.fields.copy')">
                    <x-checkbox :text="__('entities/move.helpers.copy')">
                        <input type="checkbox" name="copy" value="1" @if (old('copy', true)) checked="checked" @endif />
                    </x-checkbox>
                </x-forms.field>
            @else
                <input type="hidden" name="copy" value="1" />
            @endcan

            @includeIf($entity->pluralType() . '.bulk.modals._copy_to_campaign')
        </x-grid>

        <x-dialog.footer>
            <button class="btn2 btn-primary">
                <i class="fa-solid fa-copy" aria-hidden="true"></i>
                @can('update', $entity->child) {{ __('entities/move.actions.move') }} @else  {{ __('entities/move.actions.copy') }} @endcan
            </button>
        </x-dialog.footer>
    </x-box>

    {!! Form::close() !!}
@endsection
