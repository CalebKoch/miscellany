<div class="box box-solid" id="race-races">
    <div class="box-header">
        <h3 class="box-title">
            {!! \App\Facades\Module::plural(config('entities.ids.timeline'), __('entities.timelines')) !!}
        </h3>
        <div class="box-tools">
            @if (request()->has('parent_id'))
                <a href="{{ route('timelines.timelines', [$model]) }}" class="btn btn-box-tool">
                    <i class="fa-solid fa-filter"></i> {{ __('crud.filters.all') }} ({{ $model->descendants()->count() }})
                </a>
            @else
                <a href="{{ route('timelines.timelines', [$model, 'parent_id' => $model->id]) }}" class="btn btn-box-tool">
                    <i class="fa-solid fa-filter"></i> {{ __('crud.filters.direct') }} ({{ $model->timelines()->count() }})
                </a>
            @endif
        </div>
    </div>

    <div id="datagrid-parent" class="table-responsive">
        @include('layouts.datagrid._table')
    </div>
</div>
