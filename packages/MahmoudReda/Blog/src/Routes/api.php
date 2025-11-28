<?php

use Illuminate\Support\Facades\Route;
use MahmoudReda\Blog\Http\Controllers\Api\PostController;

Route::group(['prefix' => 'api/blog', 'middleware' => ['api']], function () {
    Route::get('/posts', [PostController::class, 'index']);
    Route::post('/posts', [PostController::class, 'store']);
    Route::get('/posts/{id}', [PostController::class, 'show']);
});
