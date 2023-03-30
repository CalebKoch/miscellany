<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        if (!app()->runningInConsole()) {
            // We don't have api grants so allow anyone with a token to do everything
            // Todo: this might not actually be needed?
            Passport::enableImplicitGrant();
        }
    }

    /**
     * The policy mappings for the application.
     * Laravel auto-discoveres policies if the Model is named \App\Models\XYZ and the police is \App\Policies\XYZPolicy
     */
    protected $policies = [
    ];
}
