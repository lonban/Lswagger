<?php

namespace Lswagger;

use Illuminate\Support\ServiceProvider;
use Lswagger\Facades\LswaggerFacade;

class LswaggerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'lswagger');
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->mergeConfigFrom(__DIR__.'/config/lswagger.php', 'lswagger');
        $this->publishes([
            __DIR__.'/resources/views' => base_path('resources/views/vendor/lswagger'),
            __DIR__.'/config/lswagger.php' => config_path('lswagger.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('lswagger', function () {
            return new LswaggerFacade();
        });
    }
}
