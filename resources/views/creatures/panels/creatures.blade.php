<div class="box box-solid" id="creature-creatures">
    <div class="box-header">
        <h3 class="box-title">
            {!! \App\Facades\Module::plural(config('entities.ids.creature'), __('entities.creatures')) !!}
        </h3>

        <div class="box-tools">
            @if (request()->has('parent'))
                <a href="{{ route('creatures.creatures', [$model]) }}" class="btn btn-box-tool">
                    <i class="fa-solid fa-filter"></i> {{ __('crud.filters.all') }} ({{ $model->descendants()->count() }})
                </a>
            @else
                <a href="{{ route('creatures.creatures', [$model, 'parent_id' => $model->id]) }}" class="btn btn-box-tool">
                    <i class="fa-solid fa-filter"></i> {{ __('crud.filters.direct') }} ({{ $model->creatures()->count() }})
                </a>
            @endif
        </div>
    </div>

    <div id="datagrid-parent" class="table-responsive">
        @include('layouts.datagrid._table')
    </div>
</div>
