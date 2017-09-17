<?php

namespace AndrewNovikof\Objects;

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

            $this->publishes([
                __DIR__ . '/../resources/examples/Cats.php' => $this->app->basePath() . '/App/Examples/Cats.php',
                __DIR__ . '/../resources/examples/Dogs.php' => $this->app->basePath() . '/App/Examples/Dogs.php',
            ], 'objects');
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
        $this->app->bind('objects', ObjectsService::class);
    }
}
