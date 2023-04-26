<div class="row">
    <div class="col-sm-6">
        @include('cruds.fields.type', ['base' => \App\Models\Event::class, 'trans' => 'events'])
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label>{{ __('events.fields.date') }}</label>
            {!! Form::text('date', FormCopy::field('date')->string(), ['placeholder' => __('events.placeholders.date'), 'class' => 'form-control', 'maxlength' => 191]) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        @include('cruds.fields.location')
    </div>
</div>

