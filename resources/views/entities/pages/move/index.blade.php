@extends('layouts.app', [
    'title' => __('entities/move.title', ['name' => $entity->name]),
    'breadcrumbs' => [
        ['url' => Breadcrumb::index($entity->pluralType()), 'label' => \App\Facades\Module::plural($entity->typeId(), __('entities.' . $entity->pluralType()))],
        ['url' => route($entity->pluralType() . '.show', [$campaign, $entity->entity_id]), 'label' => $entity->name],
        __('crud.actions.move'),
    ]
])

@section('content')
    @include('partials.errors')
    {!! Form::open(['route' => ['entities.move', $campaign, $entity->id], 'method' => 'POST']) !!}

    {{ csrf_field() }}
    <div class="max-w-3xl">
        <x-box>
            <p class="help-block mb-5">
                {{ __('entities/move.panel.description') }}
            </p>

            <div class="field-campaign mb-5">
                <label>{{ __('entities/move.fields.campaign') }}</label>
                {!! Form::select('campaign', $campaigns, null, ['class' => 'form-control']) !!}
            </div>

            @can('update', $entity->child)
                <div class="field-copy form-check">
                    <label>{!! Form::checkbox('copy', 1, true) !!}
                        {{ __('entities/move.fields.copy') }}
                    </label>
                    <p class="help-block">
                        {{ __('entities/move.helpers.copy') }}
                    </p>
                </div>
            @else
                {!! Form::hidden('copy', 1) !!}
            @endcan

            @includeIf($entity->pluralType() . '.bulk.modals._copy_to_campaign')

            <x-dialog.footer>
                <button class="btn2 btn-primary">
                    <i class="fa-solid fa-copy" aria-hidden="true"></i>
                    @can('update', $entity->child) {{ __('entities/move.actions.move') }} @else  {{ __('entities/move.actions.copy') }} @endcan
                </button>
            </x-dialog.footer>
        </x-box>
    </div>

    {!! Form::close() !!}
@endsection
