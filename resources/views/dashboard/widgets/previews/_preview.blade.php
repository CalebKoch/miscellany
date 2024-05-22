<div class="preview overflow-hidden relative max-h-52" data-toggle="preview" id="widget-preview-body-{{ $widget->id }}">
    {!! $slot !!}
    <div class="entity-content">
        {!! $model->parsedEntry() !!}
    </div>

    @include('dashboard.widgets.previews._members')
    @include('dashboard.widgets.previews._relations')
    @include('dashboard.widgets.previews._attributes')
    <div class="absolute w-full bottom-0 h-52 gradient-to-base-100"></div>
</div>
<a href="#" class="preview-switch inline-block w-full text-center"
   id="widget-preview-switch-{{ $widget->id }}" data-widget="{{ $widget->id }}" data-toggle="tooltip" data-title="{{ __('Click to toggle') }}">
    <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
    <span class="sr-only">{{ __('Click to toggle') }}</span>
</a>
