<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts.tracking.tracking')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $title ?? __('default.page_title') }} - {{ config('app.name') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta property="og:title" content="{{ $title ?? '' }} - {{ config('app.name') }}" />
    <meta property="og:site_name" content="{{ config('app.site_name') }}" />
@yield('og')

    <link rel="icon" type="image/png" href="/favicon.ico">
    <link href="/css/bootstrap.css?v={{ config('app.version') }}" rel="stylesheet">
    @vite([
    'resources/sass/vendor.scss',
    'resources/sass/app.scss',
    ])
    @if (!config('fontawesome.kit'))<link href="/vendor/fontawesome/6.0.0/css/all.min.css" rel="stylesheet">@endif

    @yield('styles')
</head>
<body class="layout-top-nav">
@include('layouts.tracking.fallback')
    <div id="app" class="wrapper">

        <div class="content-wrapper">
            <section class="content-header mb-5">
            </section>

            <section class="content">
                @yield('content')
            </section>
        </div>

        @includeWhen(!isset($footer) || $footer !== false, 'layouts.footer')

    </div>

<script src="/js/vendor.js" defer></script>
    @vite('resources/js/app.js')
@if (config('fontawesome.kit'))
    <script src="https://kit.fontawesome.com/{{ config('fontawesome.kit') }}.js" crossorigin="anonymous"></script>
@endif    @yield('scripts')
</body>
</html>
