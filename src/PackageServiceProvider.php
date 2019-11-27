<?php

namespace {PackageNamespace};

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{

    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', '{slug}');

        if (! $this->app->routesAreCached()) {
            require __DIR__.'/routes/web.php';
        }

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->publishes([
            __DIR__.'/../resources/assets/dist' => public_path('assets/{slug}'),
        ], 'public');

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register(){}

}
