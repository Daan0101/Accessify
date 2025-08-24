<?php

namespace Daan0101\Accessify;

use Illuminate\Support\ServiceProvider;
use Daan0101\Accessify\Console\Install;

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

        if ($this->app->runningInConsole()) {
            $this->commands([
                Install::class,
            ]);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../migrations/0000_00_00_000000_create_accessify_codes.php' => database_path('migrations/0000_00_00_000000_create_accessify_codes.php'),
        ], 'accessify-migrations');

        $this->publishes([
            __DIR__ . '/../config/accessify.php' => config_path('accessify.php'),
        ], 'accessify-config');
    }
}
