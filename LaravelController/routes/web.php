<?php

use Illuminate\Support\Facades\Route;
// add path controller
use App\Http\Controllers\PageController;    
use App\Http\Controllers\TestController;    



Route::get('/', function () {
    return view('welcome');
});
//Method 1.
// Route::get('/', [PageController::class, 'showHome']);
// Route::get('/user', [PageController::class, 'showUser']);
/* 2. method 2 Route With name (this name use in anchor tag)
Route::get('/', [PageController::class, 'showHome'])->name=('home');
Route::get('/user', [PageController::class, 'showUser'])->name('user');
*/

/** 3. Pass the value inside Contrller with the help of Route */

/*
Route::get('/', [PageController::class, 'showHome'])->name('home');
Route::get('/user/{id}', [PageController::class, 'showUser'])->name('user');

// anchor tag
Route::get('/blog', [PageController::class, 'showBlog'])->name('blog');
*/

// ** Controller Group 
Route::controller(PageController::class)->group(function(){
    Route::get('/', 'showHome')->name('home');
    Route::get('/user/{id}', 'showUser')->name('user');
    Route::get('/blog', 'showblog')->name('blog');
});

// single action controller (without method name)
Route::get('/test',TestController::class);