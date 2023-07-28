<?php

namespace App\Providers;

use App\Services\EntityService;
use App\Services\MentionsService;
use Illuminate\Support\ServiceProvider;

class MentionsServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(MentionsService::class, function () {
            return new MentionsService(new EntityService());
        });

        $this->app->alias(MentionsService::class, 'mentions');
    }
}
