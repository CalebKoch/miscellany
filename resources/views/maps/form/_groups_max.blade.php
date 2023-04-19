@extends('layouts.' . (request()->ajax() ? 'ajax' : 'app'), [
    'title' => __('maps/groups.create.title', ['name' => $map->name]),
    'description' => '',
    'breadcrumbs' => [
        ['url' => route('maps.index'), 'label' => __('entities.maps')],
        ['url' => $map->entity->url('show'), 'label' => $map->name],
        ['url' => route('maps.map_groups.index', [$map]), 'label' => __('maps.panels.groups')],
        __('maps/groups.create.title')
    ]
])

@section('content')
    <div class="modal-body text-center">
        @if (request()->ajax())
            <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('crud.delete_modal.close') }}"><span aria-hidden="true">&times;</span></button>
        @endif

        @if ($campaign->boosted())
            {{ __('maps/groups.pitch.error') }}
        @else
            <x-cta :campaign="$campaign">
                <p>{{ __('maps/groups.pitch.until', ['max' => $max]) }}</p>
            </x-cta>
        @endif
    </div>
@endsection
