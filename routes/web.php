<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::controller(PostController::class)->group(function () {
    Route::get('/posts','index')->name('post.index');
    Route::get('/posts/create','create')->name('post.create');
    Route::post('/posts','store')->name('post.store');
    Route::get('/posts/show/{id?}','show')->name('post.show');
});
