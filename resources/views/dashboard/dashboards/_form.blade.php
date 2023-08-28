<?php
/**
 * @var \App\Models\Campaign $campaign
 * @var \App\Models\CampaignDashboard $dashboard
 */
?>
<div class="flex flex-col gap-5 w-full">

    <x-forms.field
        field="name"
        :required="true"
        :label="__('dashboard.dashboards.fields.name')">
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => __('dashboard.dashboards.placeholders.name')]) !!}
    </x-forms.field>

    <div class="field grid grid-cols-2 gap-5">
        <div class="font-extrabold">{{ __('campaigns.members.fields.role') }}</div>
        <div class="font-extrabold">{{ __('dashboard.dashboards.fields.visibility') }}</div>

        @foreach($campaign->roles as $role)
            <div class="truncate">{{$role->name}}</div>
            <select name="roles[{{ $role->id }}]">
                @if(!$role->is_admin)
                <option value="">{{ __('dashboard.dashboards.visibility.none') }}</option>
                @endif

                <option value="visible" @if(!empty($dashboard) && $dashboard->permission($role)) selected="selected" @endif>{{ __('dashboard.dashboards.visibility.visible') }}</option>
                <option value="default" @if(!empty($dashboard) && $dashboard->permission($role, true)) selected="selected" @endif>{{ __('dashboard.dashboards.visibility.default') }}</option>
            </select>
        @endforeach
    </div>


@if(!empty($source))
    <div class="field-copy">
        {!! Form::hidden('copy_widgets', null) !!}
        <label>{!! Form::checkbox('copy_widgets', 1, true) !!}
            {{ __('dashboard.dashboards.fields.copy_widgets') }}
        </label>
        <p class="help-block">{{ __('dashboard.dashboards.helpers.copy_widgets', ['name' => $source->name]) }}</p>
        {!! Form::hidden('source', $source->id) !!}
    </div>
@endif
</div>
