@extends('layouts.front', [
    'metaDescription' => __('front.home.seo.meta-description'),
    'title' => __('front.meta.title', ['kanka' => config('app.name')]),
    'skipEnding' => true,
])


@section('og')
    <meta property="og:description" content="{{ __('front.home.seo.meta-description') }}" />
    <meta property="og:url" content="{{ route('home') }}" />
    <meta property="og:description" content="{{ __('front.home.seo.meta-description')  }}"/>

@endsection

@section('content')
    @include('front.master')

    <section class="bg-primary text-center" id="novel">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h2 class="section-heading">{{ __('front.first_block.title') }}</h2>
                    <p>{{ __('front.first_block.description', ['kanka' => config('app.name')]) }}</p>
                </div>
            </div>
            <div class="device-container">
                <div class="device-mockup iphone6_plus portrait white">
                    <div class="device">
                        <img src="https://images.kanka.io/app/rWOHJ992BwZTG4E18hETBpd3xWA=/900x675/smart/src/images%2Ffront%2Fadam-morley-hd.png" class="img-fluid d-none d-lg-inline-block" loading="lazy" alt="{{ config('app.name') }} tabletop rpg campaign management and worldbuilding dashboard">
                        <img src="https://images.kanka.io/app/dnYneEyDjAkmwrfjoUMYovRUcbI=/600x450/smart/src/images%2Ffront%2Fadam-morley-hd.png" class="img-fluid d-inline-block d-lg-none" loading="lazy" alt="{{ config('app.name') }} tabletop rpg campaign management and worldbuilding dashboard">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="features" id="features">
        <div class="container">
            <div class="section-heading text-center">
                <h2>{{ __('front.features.title') }}</h2>
                <p class="text-muted">{{ __('front.features.description', ['kanka' => config('app.name')]) }}</p>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                        <h3>{{ __('front.features.free.title') }}</h3>
                        <p class="text-muted">
                            {!! __('front/features.free.description', [
            'bonuses' => link_to_route('front.pricing', __('front.features.free.bonuses'), ['#paid-features']),
        ]) !!}
                        </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                        <h3>{{ __('front.features.collaborative.title') }}</h3>
                        <p class="text-muted">
                            {!! __('front/features.collaborative.description') !!}
                        </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                        <h3>{{ __('front/features.entity.title') }}</h3>
                        <p class="text-muted">
                            {!! __('front/features.entity.description') !!}
                        </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="m-3 text-center">
            <a href="{{ route('front.features') }}" class="btn btn-primary btn-lg">
                {{ __('front/features.discover-all') }}
            </a>
            </div>
        </div>
    </section>

    @if (config('services.stripe.enabled'))
    <section id="pricing" class="pt-2">
        <div class="container">
            <div class="section-heading text-center">
                <h2>{{ __('front.pricing.title') }}</h2>
                <p class="text-muted">{{ __('front.pricing.description', ['kanka' => config('app.name')]) }}</p>
            </div>
            @include('front._pricing')
        </div>
    </section>
    @endif

    @includeWhen(false, 'front._testimonials')

    @includeWhen(!empty($campaigns), 'front._campaigns')
@endsection
