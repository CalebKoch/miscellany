<div class="option flex gap-2">

    @include('entities.creator.selection._main', [
        'singular' => 'attribute_template',
        'plural' => 'attribute_templates',
        'id' => config('entities.ids.attribute_template'),
    ])
    @include('entities.creator.selection._full', ['key' => 'attribute_templates'])
</div>
