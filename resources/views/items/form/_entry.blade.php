<div class="row">
    <div class="col-md-6">
        @include('cruds.fields.name', ['trans' => 'items'])
    </div>
    <div class="col-md-6">
        @include('cruds.fields.type', ['base' => \App\Models\Item::class, 'trans' => 'items'])
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
        @include('cruds.fields.item', ['isParent' => true])
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        @include('cruds.fields.price', ['trans' => 'items'])
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>{{ __('items.fields.size') }}</label>
            {!! Form::text('size', FormCopy::field('size')->string(), ['placeholder' => __('items.placeholders.size'), 'class' => 'form-control', 'maxlength' => 191]) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        @include('cruds.fields.location')
    </div>
    <div class="col-md-6">
        @include('cruds.fields.character', ['label' => __('items.fields.character'), 'name' => 'character_id'])
    </div>
</div>

@include('cruds.fields.entry2')

<div class="row">
    <div class="col-md-6">
        @include('cruds.fields.tags')
    </div>
    <div class="col-md-6">
        @include('cruds.fields.image')
    </div>
</div>
