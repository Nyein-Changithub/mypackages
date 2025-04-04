<?php

namespace Mypack\MyPackage;

use Illuminate\Support\ServiceProvider;

class MyPackageProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->make('Mypack\MyPackage\MyPackageController');
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
