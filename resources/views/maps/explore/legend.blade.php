<?php
/**
 * @var \App\Models\Map $map
 * @var \App\Models\MapMarker $marker
 */
?>
<h4 class="text-sidebar-content">{{ __('maps.panels.legend') }}</h4>
<ul>
    @foreach ($map->legendMarkers(false) as $marker)
        <li>
            @if(isset($marker['markers']))
                <a href="#" class="map-legend-marker map-legend-group" data-animate="collapse" data-target="#map-legend-group-{{ $marker['id'] }}">{!! $marker['name'] !!}</a>

                <ul class="hidden overflow-hidden" id="map-legend-group-{{ $marker['id'] }}">
                    @foreach ($marker['markers'] as $mk)
                        <li>
                            <a href="#" class="!text-sidebar-content map-legend-marker" data-lng="{{ $mk['longitude'] }}" data-lat="{{ $mk['latitude'] }}" data-id="marker{{ $mk['id'] }}">
                                {!! $mk['name'] !!}
                            </a>
                        </li>
                    @endforeach
                </ul>
            @else
                <a href="#" class="map-legend-marker " data-lng="{{ $marker['longitude'] }}" data-lat="{{ $marker['latitude'] }}" data-id="marker{{ $marker['id'] }}">
                    {!! stripcslashes($marker['name']) !!}
                    @if (\Illuminate\Support\Arr::has($marker, 'visibility')) {!! $marker['visibility'] !!}@endif
                </a>
            @endif
        </li>
    @endforeach
</ul>

