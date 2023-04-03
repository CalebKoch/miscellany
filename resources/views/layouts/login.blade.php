<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
@include('layouts._tracking', ['noads' => true])
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $title ?? __('default.page_title') }} - {{ config('app.name', 'Laravel') }}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="robots" content="noindex">
    <meta property="og:title" content="{{ $title ?? '' }} - {{ config('app.name') }}" />
    <meta property="og:site_name" content="{{ config('app.site_name') }}" />

    <link rel="icon" type="image/png" href="/favicon.ico">

    <link href="/css/bootstrap.css?v={{ config('app.version') }}" rel="stylesheet">

    @vite('resources/sass/auth.scss')
    @if (!config('fontawesome.kit'))<link href="/vendor/fontawesome/6.0.0/css/all.min.css" rel="stylesheet">@endif
</head>
<body  class="hold-transition register-page">
@include('layouts._tracking-fallback')
    <div class="login-box">

        <!-- Content Header (Page header) -->
        <div class="login-box-body">
            <div class="text-center login-logo">
                <a href="{{ route('home') }}" tabindex="-1">
                    <img src="https://kanka-app-assets.s3.amazonaws.com/images/logos/logo-small.png" alt="{{ config('app.name') }}" title="{{ config('app.name') }}"/></a>
            </div>
            @yield('content')
        </div>
    </div>

@if (config('fontawesome.kit'))
    <script src="https://kit.fontawesome.com/{{ config('fontawesome.kit') }}.js" crossorigin="anonymous"></script>
@endif
    <script src="/js/vendor.js" defer></script>
    @vite('resources/js/auth.js')
@yield('scripts')
</body>
</html>
