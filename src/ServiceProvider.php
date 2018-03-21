<?php

namespace TongLei\BackTools;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use TongLei\BackTools\Commands\InitCommands;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // 注册命令
        $this->commands([ InitCommands::class ]);

        // 加载路由
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
