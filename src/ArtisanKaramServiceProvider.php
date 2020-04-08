<?php

namespace karam\Commands;

use Illuminate\Support\ServiceProvider;

class ArtisanKaramServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('command.karam.first' , function ($app){
            return $app['karam\Commands\KaramCommand'];
        });
        $this->commands('command.karam.first');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
