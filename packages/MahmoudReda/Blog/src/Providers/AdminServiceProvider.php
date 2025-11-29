<?php

namespace MahmoudReda\Blog\Providers;

use Illuminate\Support\ServiceProvider;

use Webkul\Admin\Events\SidebarMenuRegister;
use Illuminate\Support\Facades\Event;

class  AdminServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__."/../Resources/views/admin","blog_admin");
        // $this->loadViewsFrom(__DIR__."/../Resources/views/admin","admin"); // Read files after read files vendor
        $this->loadRoutesFrom(__DIR__."/../Routes/admin-routes.php");
        $this->loadRoutesFrom(__DIR__."/../Routes/api.php");
        // Widget::addPath(__DIR__ . '/../Widgets'); // deceration
         Event::listen(SidebarMenuRegister::class, function ($sidebar) {
            $sidebar->addItem([
                'key' => 'blog',
                'route' => 'admin.blog.index',
                'icon' => 'icon pencil-alt-icon',
                'name' => 'Blog',
                'sort' => 10
            ]);
        });
    }



}
