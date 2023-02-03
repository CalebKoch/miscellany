<?php /** @var \App\Models\Family $model */?>

@if (!$model->showProfileInfo())
    @php return @endphp
@endif

<div class="sidebar-section-box sidebar-section-profile">
    <div class="sidebar-section-title cursor-pointer text-lg user-select" data-toggle="collapse" data-target="#sidebar-profile-elements">
        <i class="fa-solid fa-chevron-right" style="display: none"></i>
        <i class="fa-solid fa-chevron-down"></i>
        {{ __('crud.tabs.profile') }}
    </div>

    <div class="sidebar-elements collapse in" id="sidebar-profile-elements">
        @if (!empty($model->family))
            <div class="element profile-family">
                <div class="title">{{ __('families.fields.family') }}</div>
                {!! $model->family->tooltipedLink() !!}
            </div>
        @endif

        @include('entities.components.profile._type')
        @include('entities.components.profile._events')

    </div>
</div>
