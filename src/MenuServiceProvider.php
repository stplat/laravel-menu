<?php

namespace Stsp\LaravelMenu;

use Stsp\LaravelMenu\Console\UnpackCommand;
use Illuminate\Support\ServiceProvider;


class MenuServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(
            'command.laravel-menu.unpack',
            function ($app) {
                return new UnpackCommand($app['files']);
            }
        );

        $this->commands('command.laravel-menu.unpack');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
    }
}
