<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/blog', function () {
    return view('blog');
});

Route::resource('posts', PostController::class);
