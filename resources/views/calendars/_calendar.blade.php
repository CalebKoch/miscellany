<?php
/** @var \App\Renderers\CalendarRenderer $renderer
 * @var \App\Models\Calendar $model
 */
if ($model->missingDetails()): ?>
    <x-alert type="warning">
        {{ __('calendars.show.missing_details') }}
    </x-alert>
<?php return;
endif;
$weekNumber = 1;
?>
@inject('renderer', 'App\Renderers\CalendarRenderer')
@inject('colours', 'App\Services\ColourService')
<?php $canEdit = auth()->check() && auth()->user()->can('update', $model) ?>
{{ $renderer->campaign($campaign)->setCalendar($model) }}
<div class="calendar-toolbar flex gap-2 items-center mb-5">
    {{ $renderer->todayButton() }}

    @if (!$renderer->isYearlyLayout())
    <div class="join">
        <a href="{{ $renderer->previous() }}" class="btn2 join-item btn-sm" data-shortcut="previous" title="{{ $renderer->previous(true) }} (Ctrl <i class='fa-solid fa-arrow-left' aria-hidden='true'></i>)" data-html="true" data-toggle="tooltip">
            <i class="fa-solid fa-angle-left"></i>
        </a>
        <div class="btn2 join-item btn-sm btn-disabled" disabled>
            {!! $renderer->currentMonthName() !!}
        </div>
        <a href="{{ $renderer->next() }}" class="btn2 join-item btn-sm"  data-shortcut="next" title="{{ $renderer->next(true) }} (Ctrl <i class='fa-solid fa-arrow-right' aria-hidden='true'></i>)" data-html="true" data-toggle="tooltip">
            <i class="fa-solid fa-angle-right"></i>
        </a>
    </div>
    @endif
    <div class="join">
        <a href="{{ $renderer->linkToYear(false) }}" class="btn2 join-item btn-sm" @if ($renderer->isYearlyLayout()) data-shortcut="previous" title="{{ $renderer->titleToYear(false) }} (Ctrl <i class='fa-solid fa-arrow-left' aria-hidden='true'></i>)" data-html="true" @else title="{{ $renderer->titleToYear(false) }}" @endif data-toggle="tooltip">
            <i class="fa-solid fa-angle-left"></i>
        </a>
        <div data-toggle="modal" data-target="#calendar-year-switcher" title="{{ __('calendars.modals.switcher.title') }}"
             class="btn2 join-item btn-sm">
            {!! $renderer->currentYearName() !!}
        </div>
        <a href="{{ $renderer->linkToYear() }}" class="btn2 join-item btn-sm" @if ($renderer->isYearlyLayout()) data-shortcut="next" title="{{ $renderer->titleToYear() }} (Ctrl <i class='fa-solid fa-arrow-right' aria-hidden='true'></i>)" data-html="true" @else title="{{ $renderer->titleToYear() }}" @endif data-toggle="tooltip">
            <i class="fa-solid fa-angle-right"></i>
        </a>
    </div>

    <div class="grow text-right">
        <div class="join">
            <a href="{{ route('calendars.show', [$campaign, $model, 'layout' => 'year', 'year' => $renderer->currentYear()]) }}"
               class="btn2 join-item btn-sm  <?=($renderer->isYearlyLayout() ? 'btn-disabled" disabled="disabled' : null)?>">
                {{ __('calendars.layouts.year') }}
            </a>
            <a href="{{ route('calendars.show', array_merge([$campaign, $model, 'year' => $renderer->currentYear()], $model->defaultLayout() === 'year' ? ['layout' => 'month'] : [])) }}"
               class="btn2 join-item btn-sm <?=(!$renderer->isYearlyLayout() ? ' btn-disabled" disabled="disabled' : null)?>">
                {{ __('calendars.layouts.month') }}
            </a>
        </div>
    </div>
    <div class="month-alias help-block m-0">{!! $renderer->monthAlias() !!}</div>
</div>

<x-box :padding="false">
@php $intercalary = $renderer->isIntercalaryMonth() @endphp
<table class="calendar table table-striped table-fixed">
    <thead>
    <tr>
        @foreach ($model->weekdays() as $weekday)
            <th>{{ $intercalary ? '' : $weekday }}</th>
        @endforeach
    </tr>
    </thead>
    <tbody>
    @if ($renderer->isYearlyLayout())
        <tr>
        @foreach ($renderer->buildForYear() as $key => $day)
            @if($key % count($model->weekdays()) == 0)
                </tr><tr>
                @if (!empty($day) && !empty($day['week']))
                    @if ($renderer->isNamedWeek($day['week']))
                        <tr class="named_week italic h-4 week-nr-{{ $day['week'] }}">
                            <td colspan="{{ count($model->weekdays()) }}" class="bg-week h-1 break-words">
                                {{ $renderer->namedWeek($day['week']) }}
                            </td>
                        </tr>
                    @endif
                @endif
            @endif
            @include('calendars._day', ['showMonth' => true])
        @endforeach
        </tr>
    @else
        @foreach ($renderer->buildForMonth() as $week => $days)
            @if (!empty($days) && $renderer->isNamedWeek($week))
                <tr class="named_week italic week-nr-{{ $week }}">
                    <td colspan="{{ count($model->weekdays()) }}" class="h-4 break-words">
                        {{ $renderer->namedWeek($week) }}
                    </td>
                </tr>
            @endif
            <tr>
                @foreach ($days as $day)
                    @include('calendars._day')
                @endforeach
            </tr>
        @endforeach
    @endif
    </tbody>
</table>
</x-box>

@section('modals')
    @parent
    <div class="modal fade" id="calendar-year-switcher" tabindex="-1" role="dialog" aria-labelledby="deleteYearSwitcherLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content bg-base-100">
                <div class="modal-header">
                    <x-dialog.close />
                    <h4 class="modal-title" id="myModalLabel">{{ __('calendars.modals.switcher.title') }}</h4>
                </div>
                <div class="modal-body">
                    {!! Form::open(['route' => ['calendars.show', $campaign, $model], 'method' => 'GET']) !!}
                    <div class="field-year">
                        <label>{{ __('calendars.fields.year') }}</label>
                        {!! Form::number('year', null, ['class' => 'form-control', 'placeholder' => e($renderer->currentYear())]) !!}
                    </div>
                    @if ($renderer->isYearlyLayout() && !$model->yearlyLayout())
                        <input type="hidden" name="layout" value="year">
                    @else
                        @if ($model->yearlyLayout())
                            <input type="hidden" name="layout" value="month">
                        @endif
                        {!! Form::hidden('month', $renderer->currentMonthId()) !!}
                    @endif

                    <x-dialog.footer :modal="true">
                        <button type="submit" class="btn2 btn-primary"> {{ __('crud.click_modal.confirm') }}</button>
                    </x-dialog.footer>
                </div>
            </div>
        </div>
    </div>
@endsection
