<div class="option flex">

    @include('entities.creator.selection._main', [
        'singular' => 'location',
        'plural' => 'locations',
        'icon' => 'ra ra-tower'
    ])

    @include('entities.creator.selection._full', ['key' => 'locations'])
</div>
