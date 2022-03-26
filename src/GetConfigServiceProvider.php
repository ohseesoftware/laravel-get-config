<?php

namespace OhSeeSoftware\LaravelGetConfig;

use Illuminate\Support\ServiceProvider;
use OhSeeSoftware\LaravelGetConfig\Commands\GetConfigCommand;

class GetConfigServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                GetConfigCommand::class
            ]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
    }
}
