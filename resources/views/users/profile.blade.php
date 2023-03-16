<?php /** @var \App\User $user */?>
@extends('layouts.front', [
    'title' => __('users/profile.title', ['name' => $user->displayName()]),
    'skipPerf' => true,
    'ogImage' => (bool) $user->avatar,
])

@section('og')
    @if (!empty($user->profile['bio']))<meta property="og:description" content="{{ $user->profile['bio'] }}" />@endif
    <meta property="og:url" content="{{ route('users.profile', $user) }}" />
    @if ($user->avatar)
        <meta property="og:image" content="{{ $user->getAvatarUrl(200)  }}" />
        <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="200" />
        <meta property="og:image:height" content="200" />
    @endif
@endsection

@section('content')
    <header class="masthead reduced-masthead" id="about">
        <div class="container h-100">
            <div class="row h-100 my-auto">
                <div class="col-md-9">
                    <div class="header-content mb-4">
                        <h1 class="mb-3">{!! $user->displayName() !!}</h1>
                        @if ($user->isBanned())
                            <div class="alert alert-warning">
                                {{__('users/profile.fields.banned')}}
                            </div>
                        @endif
                        @if (!empty($user->profile['bio']))
                            <p class="mb-5 text-justify">
                                {!! nl2br($user->profile['bio']) !!}
                            </p>
                        @endif

                        @if ($discord = $user->discord())
                            <span class="mr-5" title="Discord" data-toggle="tooltip">
                            <i class="fab fa-discord"></i> {{ $discord->settings['username'] }}#{{ $discord->settings['discriminator'] }}
                            </span>
                        @endif

                        @if ($user->hasPlugins())
                            <a class="mr-5" href="{{ config('marketplace.url') . '/profiles/' . $user->id }}" title="Marketplace" data-toggle="tooltip" target="_blank">
                                <i class="fa-solid fa-shop"></i>
                                {{ __('front.menu.marketplace') }}
                            </a>
                        @endif

                        @if (auth()->check() && !\App\Facades\Identity::isImpersonating() && auth()->user()->id === $user->id)
                            <a href="{{ route('settings.profile') }}" target="_blank" title="{{ __('crud.edit') }}" data-toggle="tooltip">
                                <i class="fa-solid fa-pencil" aria-hidden="true"></i> {{ __('settings.profile.actions.update_profile') }}
                            </a>
                        @endif
                    </div>
                </div>
                    <div class="col-md-3 mt-md-5 text-center profile-pledge">
                    @if ($user->isElemental())
                        <a href="{{ route('front.hall-of-fame') }}">
                            <img src="https://kanka-app-assets.s3.amazonaws.com/images/tiers/elemental-325.png"
                                 class="profile-subscriber" title="Elemental" />
                        </a>
                        <div class="text-uppercase">Elemental</div>
                    @elseif ($user->isWyvern())
                        <a href="{{ route('front.hall-of-fame') }}">
                            <img src="https://kanka-app-assets.s3.amazonaws.com/images/tiers/wyvern-325.png"
                                class="profile-subscriber mb-2" title="Wyvern" />
                        </a>
                        <div class="text-uppercase">Wyvern</div>

                    @elseif ($user->isOwlbear())
                        <a href="{{ route('front.hall-of-fame') }}">
                        <img src="https://kanka-app-assets.s3.amazonaws.com/images/tiers/owlbear-325.png"
                                 class="profile-subscriber mb-2" title="Owlbear" />
                        </a>
                        <div class="text-uppercase">Owlbear</div>
                    @elseif ($user->hasRole('admin'))
                        <a href="{{ route('front.about') }}">
                            <img src="https://kanka-app-assets.s3.amazonaws.com/images/logos/icon-large.png"
                                 class="profile-subscriber no-transform mb-2" title="Kanka Team" />
                        </a>
                        <div class="text-uppercase lead">
                            Kanka Team
                        </div>
                    @else
                        <img src="https://kanka-app-assets.s3.amazonaws.com/images/tiers/kobold-325.png"
                                 class="profile-subscriber" title="Kobold" />
                        <div class="text-uppercase">Kobold</div>
                    @endif
                    </div>
            </div>
        </div>
    </header>

    <section class="profile pt-5" id="profile">
        <div class="container">
            <div class="section-body">

                <div class="row">
                    <div class="col-md-9">
                        @if (!$campaigns->isEmpty())
                            <h1>{{ __('users/profile.fields.public_campaigns') }}</h1>

                            <div class="row">
                                @foreach ($campaigns as $campaign)
                                    <div class="col-xl-6 col-12">
                                        @include('front._campaign', ['campaign' => $campaign, 'featured' => false])
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <div class="col-md-3">

                        <div class="card mb-5">
                            <div class="card-body mx-auto text-center">
                                    <p>
                                        {!! __('users/profile.fields.member_since', ['date' => '<br />' . $user->created_at->format('M d, Y')]) !!}
                                    </p>

                                    @if ($user->subscribed('kanka'))
                                        <p>
                                            {!! __('users/profile.fields.subscriber_since', ['date' => '<br />' . $user->subscription('kanka')->created_at->format('M d, Y')]) !!}
                                        </p>
                                    @endif

                                    <p>
                                        {!! __('users/profile.fields.entities_created', [
    'count' => '<br />' . $user->createdEntitiesCount(),
    'help' => '<i class="fa-solid fa-question-circle" title="' . __('users/profile.helpers.entities_created') . '" data-toggle="tooltip"></i>',
    ]) !!}</p>
                            </div>
                        </div>


                        @includeWhen($user->hasAchievements(), 'users._badges')
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
