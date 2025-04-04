<?php

namespace Hello\MyPackage;

use Illuminate\Support\ServiceProvider;

class MyPackageProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->make('Hello\MyPackage\MyPackageController');
        $this->loadViewsFrom(__DIR__. '/views','myPackage');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        include __DIR__ . '/routes.php';
    }
}
