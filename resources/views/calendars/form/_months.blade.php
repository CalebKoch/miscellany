<?php /** @var \App\Models\Calendar $model */?>
<div class="form-group required">
    <label>{{ __('calendars.fields.months') }}</label>
    <p class="help-block">{{ __('calendars.hints.months') }}</p>
    <input type="hidden" name="month_name" />
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-6">{{ __('calendars.parameters.month.name') }}</div>
        <div class="col-md-2">{{ __('calendars.parameters.month.length') }}</div>
        <div class="col-md-2">{{ __('calendars.parameters.month.alias') }}</div>
        <div class="col-md-2">{{ __('calendars.parameters.month.type') }} <i class="fa-solid fa-question-circle" data-toggle="tooltip" title="{{ __('calendars.helpers.month_type') }}"></i></div>
    </div>
</div>
<?php
$months = [];
$names = old('month_name');
$lengths = old('month_length');
$aliases = old('month_alias');
$types = old('month_type');
if (!empty($names)) {
    $cpt = 0;
    foreach ($names as $name) {
        if (!empty($name) || !empty($lengths[$cpt])) {
            $months[] = [
                'name' => $name,
                'length' => $lengths[$cpt],
                'alias' => $aliases[$cpt],
                'type' => $types[$cpt],
            ];
        }
        $cpt++;
    }
} elseif (isset($model)) {
    $months = $model->months();
} elseif (isset($source)) {
    $months = $source->months();
}?>
<div class="calendar-months sortable-elements" data-handle=".input-group-addon">
    @foreach ($months as $month)
        <div class="form-group parent-delete-row">
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group">
                        <span class="input-group-addon cursor-pointer">
                            <span class="fa-solid fa-arrows-alt-v" aria-hidden="true"></span>
                        </span>
                        <label class="sr-only">{{ __('calendars.parameters.month.name') }}</label>
                        {!! Form::text('month_name[]', $month['name'], ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-md-2">
                    <label class="sr-only">{{ __('calendars.parameters.month.length') }}</label>
                    {!! Form::number('month_length[]', $month['length'], [
                        'class' => 'form-control',
                        'maxlength' => 4,
                        'aria-label' => __('calendars.parameters.month.length'),
                    ]) !!}
                </div>
                <div class="col-md-2">
                    <label class="sr-only">{{ __('calendars.parameters.month.alias') }}</label>
                    {!! Form::text('month_alias[]', \Illuminate\Support\Arr::get($month, 'alias', ''), [
                        'class' => 'form-control',
                        'maxlength' => 191,
                        'placeholder' => __('calendars.parameters.month.alias'),
                        'aria-label' => __('calendars.parameters.month.name'),
                    ]) !!}
                </div>
                <div class="col-md-2">
                    <div class="input-group">
                        <label class="sr-only">{{ __('calendars.parameters.month.type') }}</label>
                        {!! Form::select('month_type[]', __('calendars.month_types'), (!empty($month['type']) ? $month['type'] : 'standard'), [
                            'class' => 'form-control',
                            'aria-label' => __('calendars.parameters.month.type'),
                        ]) !!}
                        <span class="input-group-btn">
                            <span class="dynamic-row-delete btn btn-danger" data-remove="4" title="{{ __('crud.remove') }}">
                                <x-icon class="trash"></x-icon>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
<a class="btn btn-default dynamic-row-add" data-template="template_month" data-target="calendar-months" href="#" title="{{ __('calendars.actions.add_month') }}">
    <x-icon class="plus"></x-icon> {{ __('calendars.actions.add_month') }}
</a>

@section('modals')
    @parent
<div id="template_month" style="display: none">
    <div class="form-group parent-delete-row">
        <div class="row">
            <div class="col-md-6">
                <div class="input-group">
                    <span class="input-group-addon cursor-pointer">
                        <span class="fa-solid fa-arrows-alt-v" aria-hidden="true"></span>
                    </span>
                    <label class="sr-only">{{ __('calendars.parameters.month.name') }}</label>
                    {!! Form::text('month_name[]', null, [
                        'class' => 'form-control',
                        'placeholder' => __('calendars.parameters.month.name'),
                        'aria-label' => __('calendars.parameters.month.name'),
                    ]) !!}
                </div>
            </div>
            <div class="col-md-2">
                <label class="sr-only">{{ __('calendars.parameters.month.length') }}</label>
                {!! Form::number('month_length[]', null, ['class' => 'form-control', 'placeholder' => __('calendars.parameters.month.length'),
                        'aria-label' => __('calendars.parameters.month.length'),]) !!}
            </div>
            <div class="col-md-2">
                <label class="sr-only">{{ __('calendars.parameters.month.alias') }}</label>
                {!! Form::text('month_alias[]', null, ['class' => 'form-control', 'placeholder' => __('calendars.parameters.month.alias'),
                        'aria-label' => __('calendars.parameters.month.alias'),]) !!}
            </div>
            <div class="col-md-2">
                <div class="input-group">
                    <label class="sr-only">{{ __('calendars.parameters.month.type') }}</label>
                    {!! Form::select('month_type[]', __('calendars.month_types'), 'standard', ['class' => 'form-control',
                        'aria-label' => __('calendars.parameters.month.type'),]) !!}
                    <span class="input-group-btn">
                        <span class="dynamic-row-delete btn btn-danger" data-remove="4" title="{{ __('crud.remove') }}">
                            <x-icon class="trash"></x-icon>
                        </span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
