<?php
/**
 * @var \App\Models\Map $map
 * @var \App\Models\MapMarker $marker
 */
?>
<h4>{{ __('maps.panels.legend') }}</h4>
<ul>
    @foreach ($map->legendMarkers(false) as $marker)
        <li>
            @if(isset($marker['markers']))
                <a href="#" class="map-legend-marker map-legend-group" data-toggle="collapse" data-target="#map-legend-group-{{ $marker['id'] }}">{!! $marker['name'] !!}</a>

                <ul class="collapse !visible in" id="map-legend-group-{{ $marker['id'] }}">
                    @foreach ($marker['markers'] as $mk)
                        <li>
                            <a href="#" class="map-legend-marker" data-lng="{{ $mk['longitude'] }}" data-lat="{{ $mk['latitude'] }}" data-id="marker{{ $mk['id'] }}">
                                {!! $mk['name'] !!}
                            </a>
                        </li>
                    @endforeach
                </ul>
            @else
                <a href="#" class="map-legend-marker" data-lng="{{ $marker['longitude'] }}" data-lat="{{ $marker['latitude'] }}" data-id="marker{{ $marker['id'] }}">
                    {!! stripcslashes($marker['name']) !!}
                    @if (\Illuminate\Support\Arr::has($marker, 'visibility')) {!! $marker['visibility'] !!}@endif
                </a>
            @endif
        </li>
    @endforeach
</ul>

