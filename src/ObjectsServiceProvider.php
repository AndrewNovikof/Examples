<?php

namespace Objects;

use Illuminate\Support\ServiceProvider;

/**
 * Class ObjectsServiceProvider
 * @package Objects
 */
class ObjectsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../resources/config/objects.php' => $this->app->configPath() . '/' . 'objects.php',
            ], 'config');
        }
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../resources/config/objects.php',
            'config'
        );
    }
}
