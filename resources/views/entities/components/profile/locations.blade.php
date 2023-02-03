<?php /** @var \App\Models\Location $model */?>

@if (!$model->showProfileInfo())
    @php return @endphp
@endif

<div class="sidebar-section-box sidebar-section-profile">
    <div class="sidebar-section-title cursor-pointer" data-toggle="collapse" data-target="#sidebar-profile-elements">
        <i class="fa-solid fa-chevron-right" style="display: none"></i>
        <i class="fa-solid fa-chevron-down"></i>
        {{ __('crud.tabs.profile') }}
    </div>

    <div class="sidebar-elements collapse in" id="sidebar-profile-elements">
        @include('entities.components.profile._type')
        @include('entities.components.profile._events')

        @if (!$model->maps->isEmpty())
            <div class="profile-maps">
                <div class="title">{{ __('entities.maps') }}</div>
                @foreach ($model->maps as $map)
                    {!! $map->tooltipedLink() !!} {!! $map->exploreLink() !!}<br />
                @endforeach
            </div>
        @endif
    </div>
</div>
