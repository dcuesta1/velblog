<?php

use Illuminate\Support\ServiceProvider;

class VelblogBaseServiceProvider extends ServiceProvider 
{
    public function boot()
    {
        $this->registerResources();
    }

    public function register()
    {
        # code...
    }

    private function registerResources()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}