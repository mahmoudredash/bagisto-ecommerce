<?php

namespace MahmoudReda\Blog\Providers;

use Illuminate\Support\ServiceProvider;

class  AdminServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__."/../Resources/views/admin","blog_admin");
        // $this->loadViewsFrom(__DIR__."/../Resources/views/admin","admin"); // Read files after read files vendor
        $this->loadRoutesFrom(__DIR__."/../Routes/admin-routes.php");
        $this->app['widget']->addPath([
            __DIR__."/../Widgets"
        ]);
    }
}
