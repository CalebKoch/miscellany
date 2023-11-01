@if (session('success') or session('success_raw'))
    <x-alert type="success" class="alert-header" :dismissible="true">
        @if (session('success_raw'))
            <span>{!! session('success_raw') !!}</span>
        @else
            <span>{{ session('success') }}</span>
        @endif
    </x-alert>
@endif
@if (session('warning'))
    <x-alert type="warning" class="alert-header" :dismissible="true">
        <span>{{ session('warning') }}</span>
    </x-alert>
@endif
@if (session('error') or session('error_raw'))
    <x-alert type="error" class="alert-header" :dismissible="true">
        @if (session('error_raw'))
            <span>{!! session('error_raw') !!}</span>
        @else
            <span>{{ session('error') }}</span>
        @endif
    </x-alert>
@endif
