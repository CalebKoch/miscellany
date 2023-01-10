<?php
/** @var \App\Models\Campaign $camp */
?>@extends('layouts.front', [
    'title' => __('front.menu.campaigns'),
    'active' => 'public-campaigns',
    'skipPerf' => true,
])

@inject('languages', 'App\Services\LanguageService')

@section('og')
    <meta property="og:description" content="{{ __("front.campaigns.description_full", ['kanka' => config('app.name')]) }}" />
    <meta property="og:url" content="{{ route('front.public_campaigns') }}" />
@endsection

@section('content')
    <section class="">
        <div class="container">
            <div class="mb-5">
                <h1 class="display-4">{{ __('front.campaigns.title', ['kanka' => config('app.name')]) }}</h1>
                <p class="lead">{{ __('front.campaigns.description_full', ['kanka' => config('app.name')]) }}</p>
            </div>

            @if ($featured->count() > 0)
            <div class="section-body mb-5" id="featured">
                <h2>{{ __('front.campaigns.featured.title') }}</h2>
                <p class="text-muted">{{ __('front.campaigns.featured.description') }}</p>

                <div class="featured-campaigns">
                    <div class="row">
                        @foreach ($featured as $camp)
                        <div class="col-lg-4 col-md-6">
                            @include('front._campaign', ['campaign' => $camp, 'featured' => true])
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif

            <div class="section-body" id="public-campaigns">
                <h2>{{ __('front.campaigns.public.title') }}</h2>
                <p class="text-muted">{{ __('front.campaigns.public.description') }}</p>

                {!! Form::open(['route' => ['front.public_campaigns', '#public-campaigns'], 'method' => 'GET']) !!}
                <div class="row mb-3">
                    <div class="col-sm mb-1">
                        {!! Form::select('language', array_merge(['' => __('campaigns.fields.locale')], $languages->getSupportedLanguagesList()), request()->get('language'), ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-sm mb-1">
                        {!! Form::select('system', array_merge(['' => __('campaigns.fields.system')], \App\Facades\CampaignCache::systems(), ['other' => __('sidebar.other')]), request()->get('system'), ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-sm mb-1">
                        {!! Form::select('is_boosted', ['' => __('front.campaigns.public.filters.all'),
 0 => __('front.campaigns.public.filters.unboosted'), 1 => __('front.campaigns.public.filters.boosted')], request()->get('is_boosted'), ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-sm mb-1">
                        {!! Form::select('is_open', ['' => __('front.campaigns.open.filters.all'),
 1 => __('front.campaigns.open.filters.open'), 0 => __('front.campaigns.open.filters.closed')], request()->get('is_open'), ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-sm mb-1">
                        {!! Form::select('featured_until', ['' => __('front.campaigns.open.filters.featured'), 0 => __('general.yes'), 1 => __('general.no')], request()->get('featured_until'), ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-sm mb-1">
                        {!! Form::select('sort_field_name', ['0' => __('front.campaigns.public.filters.entities'), '1' => __('front.campaigns.public.filters.followers')], request()->get('sort_field_name'), ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-sm mb-1">
                        <input type="submit" class="btn btn-primary" value="{{ __('crud.actions.apply') }}" />
                    </div>
                </div>
                {!! Form::close() !!}

                @if (empty($campaigns))
                <p class="text-muted">{{ __('front.campaigns.public.no-results') }}</p>
                @else
                <div class="row">
                    @foreach ($campaigns as $camp)
                        <div class="col-sm-6">
                            @include('front._campaign', ['campaign' => $camp, 'featured' => false])
                        </div>
                    @endforeach
                </div>

                {{ $campaigns->fragment('public-campaigns')
                    ->appends('language', request()->get('language'))
                    ->appends('system', request()->get('system'))
                    ->appends('is_boosted', request()->get('is_boosted'))
                    ->appends('sort_field_name', request()->get('sort_field_name'))
                    ->onEachSide(2)
                    ->links() }}
                @endif
            </div>
        </div>
    </section>

@endsection
