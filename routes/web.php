<?php

use App\Http\Controllers\Pagescontroller;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', [Pagescontroller::class, 'index']);
Route::resource('/blog', PostController::class,);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

