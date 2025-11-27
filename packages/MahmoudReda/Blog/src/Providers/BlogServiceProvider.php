<?php

namespace MahmoudReda\Blog\Providers;

use Illuminate\Support\ServiceProvider;

class  BlogServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../Routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../Resources/views','blog');
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations');
    }
}
