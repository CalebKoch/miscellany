<?php /** @var \App\Models\Character $model */
$appearances = $model->characterTraits()->appearance()->orderBy('default_order')->get();
?>

@if (count($appearances) > 0)
    <div class="box box-solid character-appearances">
        <div class="box-header with-border">
            <h3 class="box-title cursor element-toggle" data-toggle="collapse" data-target="#character-appearance-body" data-short="character-appearance-toggle">
                <i class="fa-solid fa-chevron-up icon-show"></i>
                <i class="fa-solid fa-chevron-down icon-hide"></i>
                {{ __('characters.sections.appearance') }}
            </h3>
        </div>
        <div class="box-body collapse in" id="character-appearance-body">
            <div class="row">
        @foreach ($appearances as $trait)
            <div class="col-sm-6">
            <p class="entity-appearance-{{ \Illuminate\Support\Str::slug($trait->name) }}">
                <b>{{ $trait->name }}</b><br />
                {{ $trait->entry }}
            </p>
            </div>
        @endforeach
            </div>
        </div>
    </div>
@endif
