@extends('layouts.login', [
    'title' => __('auth.register.title')
])

@section('content')
    <h1>{{ __('auth.register.title') }}</h1>

    @include('partials.errors')

    <form method="POST" action="{{ route('register') }}" class="submit-lock">
        {{ csrf_field() }}

        <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="{{ __('auth.register.fields.name') }}" required autofocus>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>

            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="{{ __('auth.register.fields.email') }}" required>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <div class="input-group">
                <input id="password" type="password" class="form-control" name="password" required placeholder="{{ __('auth.register.fields.password') }}">
                <a href="#" class="toggle-password input-group-addon" tabindex="-1" title="{{ __('auth.helpers.password') }}">
                    <i class="toggle-password-icon fa-solid fa-eye"></i>
                </a>
            </div>

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <div class="checkbox">
                <label for="newsletter" class="">
                    <input id="newsletter" type="checkbox" name="newsletter" value="1" />
                    {!! __('front/newsletter.groups.all') !!}
                </label>
            </div>
        </div>
        <div class="">
            <div class="pull-right pl-2">
                <button type="submit" class="btn btn-primary btn-save">
                    {{ __('auth.register.submit') }}
                </button>
                <div class="btn btn-primary btn-wait disabled" style="display: none;">
                    <i class="fa-solid fa-spinner fa-spin"></i>
                </div>
            </div>
            <p class="small">
                {!! __('auth.register.tos', [
    'terms' => link_to_route('front.terms', __('front.terms.title')),
    'privacy' => link_to_route('front.privacy', __('front.menu.privacy')),
    ]) !!}
            </p>
        </div>
    </form>

    <div class="row">
        <div class="col-md-12">
            <div class="social-auth-links text-center">
                <p>- {{ __('auth.login.or') }} -</p>

                @if(config('services.facebook.client_id'))
                <a href="{{ route('auth.provider', ['provider' => 'facebook']) }}" class="btn btn-app btn-facebook" title="{{ __('auth.register.register_with_facebook') }}">
                    <i class="fab fa-facebook-f"></i> Facebook
                </a>
                @endif

                @if(config('services.google.client_id'))
                <a href="{{ route('auth.provider', ['provider' => 'google']) }}" class="btn btn-app btn-google" title="{{ __('auth.register.register_with_google') }}">
                    <i class="fab fa-google"></i> Google
                </a>
                @endif

                @if(config('services.twitter.client_id'))
                <a href="{{ route('auth.provider', ['provider' => 'twitter']) }}" class="btn btn-app btn-twitter" title="{{ __('auth.register.register_with_twitter') }}">
                    <i class="fab fa-twitter"></i> Twitter
                </a>
                @endif
            </div>

            <p>
                {!! __('auth.register.already', ['login' => link_to('login', __('auth.register.log-in'))]) !!}
            </p>

        </div>
    </div>

</div>
@endsection
