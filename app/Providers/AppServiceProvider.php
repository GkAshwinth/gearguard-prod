<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (env('APP_ENV') === 'production' || env('RAILWAY_ENVIRONMENT') || env('RAILWAY_STATIC_URL')) {
            URL::forceScheme('https');
        }

        // Advanced Feature: Registering Eloquent Observers
        \App\Models\Equipment::observe(\App\Observers\EquipmentObserver::class);
    }
}
