<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
Route::get('/', [PostController::class, 'index'])->name('home');
Route::resource('posts', PostController::class);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/register', [AuthController::class, 'showregister']);
Route::post('/register', [AuthController::class, 'register']);
//Route::get('/home', [PostController::class, 'index'])->middleware('auth');
Route::get('/my-posts', [PostController::class, 'myposts'])->middleware('auth')->name('posts.my_posts');
