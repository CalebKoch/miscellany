<?php /** @var \App\Models\Calendar $model */?>
<div class="row">
    <div class="col-md-6">
        <div class="form-group required">
            <label>{{ __('calendars.fields.weekdays') }}</label>
            <p class="help-block">{{ __('calendars.hints.weekdays') }}</p>
            <input type="hidden" name="weekday" />
        </div>
        <?php
        $weekdays = [];
        $names = old('weekday');
        if (!empty($names)) {
            foreach ($names as $name) {
                if (!empty($name)) {
                    $weekdays[] = $name;
                }
            }
        } elseif (isset($model)) {
            $weekdays = $model->weekdays();
        } elseif (isset($source)) {
            $weekdays = $source->weekdays();
        } ?>
        <div class="calendar-weekdays sortable-elements" data-handle=".input-group-addon">
            @foreach ($weekdays as $weekday)
                <div class="form-group parent-delete-row">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <span class="fa-solid fa-arrows-alt-v" aria-hidden="true"></span>
                        </span>
                        <label class="sr-only">{{ __('calendars.parameters.weeks.name') }}</label>
                        {!! Form::text('weekday[]', $weekday, ['class' => 'form-control']) !!}
                        <span class="input-group-btn">
                            <span class="dynamic-row-delete btn btn-danger" title="{{ __('crud.remove') }}">
                                <i class="fa-solid fa-trash" aria-hidden="true"></i>
                                <span class="sr-only">{{ __('crud.remove') }}</span>
                            </span>
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="btn btn-default dynamic-row-add" data-template="template_weekday" data-target="calendar-weekdays" href="#" title="{{ __('calendars.actions.add_weekday') }}">
            <i class="fa-solid fa-plus" aria-hidden="true"></i> {{ __('calendars.actions.add_weekday') }}
        </a>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>{{ __('calendars.fields.week_names') }}</label>
            <p class="help-block">{{ __('calendars.hints.weeks') }}</p>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-4">{{ __('calendars.parameters.weeks.number') }}</div>
                <div class="col-md-8">{{ __('calendars.parameters.weeks.name') }}</div>
            </div>
        </div>
        <?php
        $weeks = [];
        $numbers = old('week_number');
        $names = old('week_name');
        if (!empty($numbers)) {
            $cpt = 0;
            foreach ($numbers as $number) {
                if (!empty($number) || !empty($names[$cpt])) {
                    $weeks[$number] = $names[$cpt];
                }
                $cpt++;
            }
        } elseif (isset($model)) {
            $weeks = $model->weeks();
        } elseif (isset($source)) {
            $weeks = $source->weeks();
        } ?>
        <div class="calendar-weeks sortable-elements" data-handle=".input-group-addon">
            @foreach ($weeks as $week => $name)
                <div class="form-group parent-delete-row">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="fa-solid fa-arrows-alt-v" aria-hidden="true"></span>
                                </span>
                                <label class="sr-only">{{ __('calendars.parameters.weeks.number') }}</label>
                                {!! Form::text('week_number[]', $week, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="input-group">
                                <label class="sr-only">{{ __('calendars.parameters.weeks.name') }}</label>
                                {!! Form::text('week_name[]', $name, ['class' => 'form-control']) !!}
                                <span class="input-group-btn">
                                    <span class="dynamic-row-delete btn btn-danger" data-remove="4" title="{{ __('crud.remove') }}">
                                        <i class="fa-solid fa-trash" aria-hidden="true"></i>
                                        <span class="sr-only">{{ __('crud.remove') }}</span>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="btn btn-default dynamic-row-add" data-template="template_week" data-target="calendar-weeks" href="#" title="{{ __('calendars.actions.add_week') }}">
            <i class="fa-solid fa-plus" aria-hidden="true"></i> {{ __('calendars.actions.add_week') }}
        </a>
    </div>
</div>

@section('modals')
    @parent
    <div id="template_weekday" style="display: none">
        <div class="form-group parent-delete-row">
            <div class="input-group">
                <span class="input-group-addon">
                    <span class="   fa-solid fa-arrows-alt-v" aria-hidden="true"></span>
                </span>
                <label class="sr-only">{{ __('calendars.parameters.weeks.name') }}</label>
                {!! Form::text('weekday[]', null, ['class' => 'form-control', 'aria-label' => __('calendars.parameters.weeks.name')]) !!}
                <span class="input-group-btn">
                    <span href="#" class="dynamic-row-delete btn btn-danger" title="{{ __('crud.remove') }}">
                        <i class="fa-solid fa-trash"></i>
                    </span>
                </span>
            </div>
        </div>
    </div>

    <div id="template_week" style="display: none">
        <div class="form-group parent-delete-row">
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <span class="fa-solid fa-arrows-alt-v" aria-hidden="true"></span>
                        </span>
                        <label class="sr-only">{{ __('calendars.parameters.weeks.number') }}</label>
                        {!! Form::number('week_number[]', null, ['class' => 'form-control', 'placeholder' => __('calendars.parameters.weeks.number')]) !!}
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="input-group">
                        <label class="sr-only">{{ __('calendars.parameters.weeks.name') }}</label>
                        {!! Form::text('week_name[]', null, ['class' => 'form-control', 'placeholder' => __('calendars.parameters.weeks.name')]) !!}
                        <span class="input-group-btn">
                            <span class="dynamic-row-delete btn btn-danger" data-remove="4" title="{{ __('crud.remove') }}">
                                <i class="fa-solid fa-trash"></i>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
