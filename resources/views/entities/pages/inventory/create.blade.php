@extends('layouts.' . (request()->ajax() ? 'ajax' : 'app'), [
    'title' => __('entities/inventories.create.title', ['name' => $entity->name]),
    'description' => '',
    'breadcrumbs' => [
        ['url' => Breadcrumb::index($entity->pluralType()), 'label' => \App\Facades\Module::plural($entity->typeId(), __('entities.' . $entity->pluralType()))],
        ['url' => $entity->url('show'), 'label' => $entity->name],
        ['url' => route('entities.inventory', [$campaign, $entity->id]), 'label' => __('crud.tabs.inventory')],
    ]
])

@section('content')
    {!! Form::open(['route' => ['entities.inventories.store', $campaign, $entity->id], 'method'=>'POST', 'data-shortcut' => 1, 'data-maintenance' => 1]) !!}
    @include('partials.forms.form', [
            'title' => __('entities/inventories.create.title', ['name' => $entity->name]),
            'content' => 'entities.pages.inventory._form',
            'submit' => __('entities/inventories.actions.add')
        ])
    {!! Form::hidden('entity_id', $entity->id) !!}
    {!! Form::close() !!}
@endsection
