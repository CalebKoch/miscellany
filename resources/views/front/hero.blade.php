<header class="masthead masthead-b">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-lg-12 my-auto landing-heading">
                <h1 class="">{{ __('front.master.heading') }}</h1>
            </div>
            <div class="col-lg-7">
                <div class="header-content text-left text-lg-center">
                    <p class="mb-5 ab-testing-a">{{ __('front.master.description', ['kanka' => config('app.name')]) }}</p>
                    <p class="mb-5 ab-testing-b">{{ __('front.master.description_q1_2023', ['kanka' => config('app.name')]) }}</p>
                    @if (config('auth.register_enabled'))
                    <a href="{{ route('register') }}" class="btn btn-primary btn-lg">
                        {{ __('front.second_block.call_to_action') }}
                    </a>
                    @endif
                </div>
            </div>
            <div class="col-lg-5 text-center">
                <div class="youtube-placeholder" data-yt-url="https://www.youtube.com/embed/ZWVf7JAWKPg">
                    <img src="https://images.kanka.io/app/O--WZGtZVhlrzMWmTDXepBGTa6c=/445x253/src/images%2Ffront%2Fplay-youtube.jpg" async loading="lazy" class="play-youtube-video" alt="Youtube video" title="What is Kanka?" width="445" height="253" >
                </div>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
</header>
