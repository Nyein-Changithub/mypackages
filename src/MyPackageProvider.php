<?php

namespace NyeinChangithub\MyPackage;

use Illuminate\Support\ServiceProvider;

class MyPackageProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->make('NyeinChangithub\MyPackage\MyPackageController');
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
