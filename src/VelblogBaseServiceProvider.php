<?php
namespace dcuesta1\Velblog;

use Illuminate\Database\Eloquent\Factory as EloquentFactory;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class VelblogBaseServiceProvider extends ServiceProvider 
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->registerPublishing();
        }

        $this->registerResources();
    }

    public function register()
    {
        $this->commands([
            Console\SeedDummyDataCommand::class,
        ]);
    }

    private function registerResources()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'velblog');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->registerEloquentFactoriesFrom(__DIR__.'/../database/factories');
        $this->registerRoutes();
    }

    protected function registerPublishing()
    {
        $this->publishes([
            __DIR__.'/../config/velblog.php' => config_path('velblog.php')
        ], 'velblog-config');
    }

    protected function registerRoutes()
    {
        Route::group(['prefix' => config('velblog.url_path','blog')], function() {
            $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        });
    }

    protected function registerEloquentFactoriesFrom($path)
    {
        $this->app->make(EloquentFactory::class)->load($path);
    }
}
