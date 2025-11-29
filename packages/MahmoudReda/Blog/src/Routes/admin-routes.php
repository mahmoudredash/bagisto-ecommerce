<?php

use Illuminate\Support\Facades\Route;
use MahmoudReda\Blog\Http\Controllers\Admin\AdminBlogController;
use Webkul\Core\Http\Middleware\NoCacheMiddleware;

Route::group([
    'middleware' =>  ['admin'],
    'prefix' => 'admin/blog'
], function(){
    Route::get('/', [AdminBlogController::class,'index'])->name('admin.blog.index');
});
