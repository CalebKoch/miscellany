@extends('layouts.' . (request()->ajax() ? 'ajax' : 'app'), [
    'title' => trans('campaigns/submissions.apply.title', ['name' => $campaign->name]),
    'breadcrumbs' => [
        __('dashboard.actions.join')
    ]
])

@section('content')
    <x-form :action="['campaign.apply.save', $campaign]" class="max-w-xl">
    @include('partials.forms.form', [
        'title' => __('campaigns/submissions.apply.title', ['name' => $campaign->name]),
        'content' => 'campaigns.submissions._apply',
        'save' => empty($submission) ? __('campaigns/submissions.apply.apply') : __('crud.update'),
        'deleteID' =>  $submission ? '#delete-submission' : null,
        'dialog' => true,
    ])
    </x-form>

    @if($submission)
        <x-form method="DELETE" :action="['campaign.apply.remove', $campaign]" id="delete-submission" />
    @endif
@endsection
