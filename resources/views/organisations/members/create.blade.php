@extends('layouts.' . (request()->ajax() ? 'ajax' : 'app'), [
    'title' => __('organisations.members.create.title', ['name' => $model->name]),
    'description' => '',
    'breadcrumbs' => [
        Breadcrumb::entity($model->entity)->list(),
        Breadcrumb::show($model)
    ]
])

@section('content')
    <x-form :action="['organisations.organisation_members.store', $campaign, $model->id]" class="ajax-subform">
        @include('partials.forms.form', [
            'title' => __('organisations.members.create.title', ['name' => $model->name]),
            'content' => 'organisations.members._form',
            'submit' => __('organisations.members.actions.submit'),
            'dialog' => true,
        ])
        <input type="hidden" name="organisation_id" value="{{ $model->id }}" />
    </x-form>
@endsection
