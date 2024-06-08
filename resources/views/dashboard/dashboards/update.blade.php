@extends('layouts.' . (request()->ajax() ? 'ajax' : 'app'), [
    'title' => trans('dashboard.dashboards.update.title', ['name' => $dashboard->name]),
    'description' => '',
    'breadcrumbs' => []
])

@section('content')
    <x-form :action="['campaign_dashboards.update', $campaign, $dashboard]" method="PATCH">
        @include('partials.forms.form', [
            'title' => __('dashboard.dashboards.update.title', ['name' => $dashboard->name]),
            'content' => 'dashboard.dashboards._form',
            'dialog' => true,
        ])
    </x-form>
@endsection
