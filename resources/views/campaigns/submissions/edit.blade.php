<x-dialog.header>
    @if($action === 'approve')
        {{ __('campaigns/submissions.actions.accept') }}
    @else
        {{ __('campaigns/submissions.actions.reject') }}
    @endif
</x-dialog.header>
<article>
    {!! Form::model($submission, ['method' => 'PATCH', 'route' => ['campaign_submissions.update', $campaign, $submission->id], 'data-shortcut' => 1, 'class' => 'entity-form w-full max-w-lg text-left']) !!}
        @if($action === 'approve')

            <x-grid type="1/1">
                <p class="m-0">{{ __('campaigns/submissions.update.approve') }}</p>

                <x-forms.field
                    field="role"
                    :label="__('campaigns.members.fields.role')"
                    :required="true">
                    {!! Form::select('role_id', $campaign->roles()->where('is_public', false)->orderBy('is_admin')->pluck('name', 'id'), null, ['class' => 'w-full']) !!}
                </x-forms.field>

                <x-forms.field
                    field="message"
                    :label="__('campaigns/submissions.fields.approval')">
                    {!! Form::text('message', null, ['class' => 'w-full', 'maxlength' => 191]) !!}
                </x-forms.field>

                <x-buttons.confirm type="primary" full="true">
                    <x-icon class="check" />
                    {{ __('campaigns/submissions.actions.accept') }}
                </x-buttons.confirm>
            </x-grid>
        @else
        <x-grid type="1/1">
            <p class="m-0">{{ __('campaigns/submissions.update.reject') }}</p>

            <x-forms.field
                field="message"
                :label="__('campaigns/submissions.fields.rejection')">
                {!! Form::text('rejection', null, ['class' => 'w-full', 'maxlength' => 191]) !!}
            </x-forms.field>

            <x-buttons.confirm type="danger" full="true">
                <i class="fa-solid fa-times" aria-hidden="true"></i>
                {{ __('campaigns/submissions.actions.reject') }}
            </x-buttons.confirm>
        </x-grid>
        @endif

    <input type="hidden" name="action" value="{{ $action }}" />
    {!! Form::close() !!}
</article>

