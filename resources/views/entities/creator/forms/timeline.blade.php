

<div class="grid grid-cols-2 gap-5">
    @include('cruds.fields.type', ['base' => \App\Models\Timeline::class, 'trans' => 'timelines'])
    <div class="form-group">
        {!! Form::select2(
            'timeline_id',
            null,
            App\Models\Timeline::class,
            false,
            'timelines.fields.timeline',
            null,
            null,
            null,
            request()->ajax() ? '#entity-modal' : null,
        ) !!}
    </div>
</div>
