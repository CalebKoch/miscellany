@extends('layouts.' . (request()->ajax() ? 'ajax' : 'app'), [
    'title' => __('families.members.create.title', ['name' => $model->name]),
    'description' => '',
    'breadcrumbs' => [
        ['url' => Breadcrumb::index('families'), 'label' => __('entities.families')],
        ['url' => route('families.show', [$campaign, $model->id]), 'label' => $model->name]
    ]
])

@section('content')
    {!! Form::open(['route' => ['families.members.store', $campaign, $model->id], 'method'=>'POST']) !!}

    @include('partials.forms.form', [
        'title' => __('families.members.create.title', ['name' => $model->name]),
        'content' => 'families.members._form',
        'submit' => __('families.members.create.submit')
    ])
    {!! Form::hidden('family_id', $model->id) !!}
    {!! Form::close() !!}
@endsection
