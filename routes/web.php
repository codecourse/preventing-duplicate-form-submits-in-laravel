<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    //
});

Route::get('/posts/create', [PostController::class, 'create']);
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');