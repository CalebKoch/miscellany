@php
/** @var \App\Models\Campaign $model */
$themes = [null => ''];
foreach (\App\Models\Theme::all() as $theme):
    $themes[$theme->id] = $theme->__toString();
endforeach;

$role = isset($model) ? \App\Facades\CampaignCache::adminRole() : null;
$boostedFormFields = [
    'class' => 'form-control',
];
if (!isset($model) || !$model->boosted()) {
    $boostedFormFields['disabled'] = 'disabled';
}
@endphp

<div class="tab-pane" id="form-ui">

    <h4>
        <i class="fa-solid fa-rocket" title="{{ __('crud.tooltips.boosted_feature') }}" data-toggle="tooltip"></i>
        {{ __('campaigns.ui.boosted') }}
    </h4>
    @if (isset($model) && $model->boosted())
        <p class="help-block">
            {!! __('campaigns.helpers.boosted', ['settings' => link_to_route('front.boosters', __('footer.boosters'))]) !!}
        </p>
    @else
        <p class="help-block">
            {!! __('campaigns.helpers.boost_required_multi', ['settings' => link_to_route('front.boosters', __('footer.boosters'))]) !!}
        </p>
    @endif

    <div class="row">
        <div class="col-md-6 col-lg-4">
            <div class="form-group">
                <label>
                    {{ __('campaigns.fields.theme') }}
                    <i class="fa-solid fa-question-circle hidden-xs hidden-sm" data-toggle="tooltip" title="{{ __('campaigns.helpers.theme') }}"></i>
                </label>


                {!! Form::select(
                    'theme_id',
                    $themes,
                    null,
                    $boostedFormFields
                ) !!}
                    <p class="help-block visible-xs visible-sm">{{ __('campaigns.helpers.theme') }}</p>
                @if (!isset($model) || !$model->boosted())
                    {!! Form::hidden('theme_id', null) !!}
                @endif
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="form-group">
                <label>
                    {{ __('campaigns.ui.fields.member_list') }}
                </label>
                {!! Form::select('ui_settings[hide_members]', [0 => __('campaigns.ui.members.visible'), 1 => __('campaigns.ui.members.hidden')], null, $boostedFormFields) !!}
                @if (!isset($model) || !$model->boosted())
                    {!! Form::hidden('ui_settings[hide_members]', 0) !!}
                @endif
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="form-group">
                <label>
                    {{ __('campaigns.ui.fields.entity_history') }}
                </label>
                {!! Form::select('ui_settings[hide_history]', [0 => __('campaigns.ui.entity_history.visible'), 1 => __('campaigns.ui.entity_history.hidden')], null, $boostedFormFields) !!}
                @if (!isset($model) || !$model->boosted())
                    {!! Form::hidden('ui_settings[hide_history]', 0) !!}
                @endif
            </div>
        </div>
    </div>

    <hr />

    <h4>{{ __('crud.fields.tooltip') }}</h4>
    <p class="help-block">
        {{ __('campaigns.ui.helpers.tooltip') }}
    </p>

    <div class="row">
        <div class="col-md-6 col-lg-4">
            <div class="form-group">
                <label>
                    <i class="fa-solid fa-rocket" title="{{ __('crud.tooltips.boosted_feature') }}" data-toggle="tooltip"></i>
                    {{ __('campaigns.ui.fields.entity_image') }}
                </label>
                {!! Form::select('ui_settings[tooltip_image]', [0 => __('campaigns.privacy.hidden'), 1 => __('campaigns.privacy.visible')], null, $boostedFormFields) !!}
                @if (!isset($model) || !$model->boosted())
                    {!! Form::hidden('ui_settings[tooltip_image]', 0) !!}
                    <p class="help-block">{!! __('campaigns.helpers.boost_required', [
                    'settings' => link_to_route('front.boosters', __('footer.boosters'))
                ]) !!}</p>
                @endif
            </div>
        </div>
    </div>

    <hr />

    <h4>{{ __('campaigns.ui.other') }}</h4>
    <p class="help-block">
        {{ __('campaigns.ui.helpers.other') }}
    </p>

    <div class="row">
        <div class="col-md-6 col-lg-4">
            <div class="form-group">
                <label>
                    {{ __('campaigns.ui.fields.connections') }}
                    <i class="fa-solid fa-question-circle hidden-xs hidden-sm" data-toggle="tooltip" title="{{ __('campaigns.ui.helpers.connections') }}"></i>

                </label>
                {!! Form::select('ui_settings[connections]', [0 => __('campaigns.ui.connections.explorer'), 1 => __('campaigns.ui.connections.list')], null, ['class' => 'form-control']) !!}
                <p class="help-block visible-xs visible-sm">{{ __('campaigns.ui.helpers.connections') }}</p>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="form-group">
                <label>
                    {{ __('campaigns.ui.fields.connections_mode') }}
                    <i class="fa-solid fa-question-circle hidden-xs hidden-sm" data-toggle="tooltip" title="{{ __('campaigns.ui.helpers.connections_mode') }}"></i>

                </label>
                {!! Form::select('ui_settings[connections_mode]', [0 => __('campaigns.ui.collapsed.default'), 1 => __('entities/relations.options.only_relations'), 2 => __('entities/relations.options.related'), 3 => __('entities/relations.options.mentions')], null, ['class' => 'form-control']) !!}
                <p class="help-block visible-xs visible-sm">{{ __('campaigns.ui.helpers.connections_mode') }}</p>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="form-group">
                <label>
                    {{ __('campaigns.ui.fields.nested') }}
                </label>
                {!! Form::select('ui_settings[nested]', [0 => __('campaigns.ui.nested.user'), 1 => __('campaigns.ui.nested.nested')], (!isset($model) ? 1 : null), ['class' => 'form-control']) !!}

            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="form-group">
                <label>
                    {{ __('campaigns.ui.fields.post_collapsed') }}
                    <i class="fa-solid fa-question-circle hidden-xs hidden-sm" data-toggle="tooltip" title="{{ __('campaigns.ui.helpers.post_collapsed') }}"></i>
                </label>
                {!! Form::select('ui_settings[post_collapsed]', [0 => __('campaigns.ui.collapsed.default'), 1 => __('campaigns.ui.collapsed.collapsed')], null, ['class' => 'form-control']) !!}
                <p class="help-block visible-xs visible-sm">{{ __('campaigns.ui.helpers.post_collapsed') }}</p>
           </div>
        </div>
    </div>
</div>
