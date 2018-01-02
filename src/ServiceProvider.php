<?php

namespace TongLei\BackTools;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use TongLei\BackTools\Commands\PublishesCommands;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->commands([
            PublishesCommands::class,
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
