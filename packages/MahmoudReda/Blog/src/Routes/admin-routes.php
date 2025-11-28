<?php

use Illuminate\Support\Facades\Route;
use MahmoudReda\Blog\Http\Controllers\Admin\AdminBlogController;

Route::group([
    'prefix' => 'admin/blog',
    'middleware' => ['admin']
], function(){
    Route::get('/', [AdminBlogController::class,'index'])->name('admin.blog.index');
});
