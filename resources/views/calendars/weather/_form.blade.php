{{ csrf_field() }}
<div class="form-group required">
    <label>{{ __('calendars/weather.fields.weather') }}</label>
    {!! Form::select('weather', __('calendars/weather.options.weather'), null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    <label>{{ __('calendars/weather.fields.name') }}</label>
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => __('calendars/weather.placeholders.name'), 'maxlength' => 40]) !!}
</div>
<div class="grid gap-5 grid-cols-1 md:grid-cols-2 mb-4">
    <div class="form-group mb-0">
        <label>{{ __('calendars/weather.fields.temperature') }}</label>
        {!! Form::text('temperature', null, ['class' => 'form-control', 'placeholder' => __('calendars/weather.placeholders.temperature')]) !!}
    </div>

    <div class="form-group mb-0">
        <label>{{ __('calendars/weather.fields.precipitation') }}</label>
        {!! Form::text('precipitation', null, ['class' => 'form-control', 'placeholder' => __('calendars/weather.placeholders.precipitation')]) !!}
    </div>
    <div class="form-group mb-0">
        <label>{{ __('calendars/weather.fields.wind') }}</label>
        {!! Form::text('wind', null, ['class' => 'form-control', 'placeholder' => __('calendars/weather.placeholders.wind')]) !!}
    </div>

    <div class="form-group mb-0">
        <label>{{ __('calendars/weather.fields.effect') }}</label>
        {!! Form::text('effect', null, ['class' => 'form-control', 'placeholder' => __('calendars/weather.placeholders.effect')]) !!}
    </div>
</div>

@include('cruds.fields.visibility_id', ['model' => $weather ?? null])
