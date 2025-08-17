<?php

namespace Daan0101\Accessify;

use Illuminate\Support\ServiceProvider;

class AccessifyServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Accessify::class, function ($app) {
            return new Accessify();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // You can add boot logic here if needed
    }
}