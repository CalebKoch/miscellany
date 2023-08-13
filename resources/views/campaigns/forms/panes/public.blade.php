<?php /** @var \App\Models\Campaign $model */?>
<div class="tab-pane" id="form-public">

    @if (isset($campaign))
    <x-alert type="info">
        <p>{!! __('campaigns/public.helpers.main', [
    'public-campaigns' => link_to('https://kanka.io/campaigns', __('footer.public-campaigns'), null, ['target' => '_blank']),
    'public-role' => link_to_route('campaigns.campaign_roles.public', __('campaigns.members.roles.public'), $campaign, ['target' => '_blank'])
]) !!}</p>
        <p>
            <a href="https://www.youtube.com/watch?v=VpY_D2PAguM" target="_blank"><i class="fa-solid fa-external-link-alt"></i> {{ __('helpers.public') }}</a>
        </p>
    </x-alert>
    @endif

    <x-grid>
        <div class="field-public">
            <label>
                {{ __('campaigns.fields.public') }}
            </label>
            {!! Form::select('is_public', [0 => __('campaigns.visibilities.private'), 1 => __('campaigns.visibilities.public')], null, ['class' => 'form-control']) !!}
        </div>

    </x-grid>
    @if (isset($model) && $model->isPublic())
        <p class="help-block mb-0">
            {!! __('campaigns.helpers.view_public', ['link' => '<a href="' . route('dashboard', $campaign) . '" target="_blank">' . route('dashboard', $campaign) . '</a>']) !!}
        </p>

        @if ($model->publicHasNoVisibility())
            <x-alert type="warning">
                {!! __('campaigns.helpers.public_no_visibility', [
'fix' => link_to_route('campaigns.campaign_roles.public', __('crud.fix-this-issue'), $campaign)
]) !!}
            </x-alert>
        @endif
    @endif

    <hr />

    <h4 class="mb-2">{{ __('campaigns.fields.public_campaign_filters') }}</h4>
    <p>
        {!! __('campaigns.sharing.filters', [
'public-campaigns' => link_to('https://kanka.io/campaigns', __('footer.public-campaigns'), null, ['target' => '_blank'])
]) !!}
    </p>

    <x-grid>
        <div class="field-locale">
            <label>{{ __('campaigns.fields.locale') }}</label>
            {!! Form::select('locale', $languages->getSupportedLanguagesList(true), null, ['class' => 'form-control']) !!}
            <p class="help-block">{{ __('campaigns.sharing.language') }}</p>
        </div>

        <div class="field-system">
            <label>{{ __('campaigns.fields.system') }}</label>
            {!! Form::text('system', null, [
                'placeholder' => __('campaigns.placeholders.system'),
                'class' => 'form-control',
                'list' => 'rpg-system-list',
                'autocomplete' => 'off'
            ]) !!}
            <p class="help-block">{{ __('campaigns.sharing.system') }}</p>
        </div>
        <div class="hidden">
            <datalist id="rpg-system-list">
                @foreach (__('rpg_systems.names') as $name)
                    <option value="{{ $name }}">{{ $name }}</option>
                @endforeach
            </datalist>
        </div>

        <div class="genres">
            <input type="hidden" name="campaign_genre" value="1">
            @include('components.form.genres', ['options' => [
                'model' => isset($model) ? $model : null,
                'quickCreator' => false
            ]])
        </div>
    </x-grid>
</div>
