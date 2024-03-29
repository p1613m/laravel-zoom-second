<?php

namespace p1613m\Zoom\Providers;

use Illuminate\Support\ServiceProvider;

class ZoomServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../../config/config.php' => config_path('zoom-second.php'),
            ], 'config');
        }
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../../config/config.php', 'zoom-second');

        // Register the main class to use with the facade
        $this->app->singleton('zoom-second', 'p1613m\Zoom\Contracts\Zoom');
        $this->app->bind('p1613m\Zoom\Contracts\Zoom', 'p1613m\Zoom\Support\Entry');

        $this->app->bind('zoom-second.client', 'p1613m\Zoom\Support\Client');
    }
}
