<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/app', function () {
    return view('layouts.app');
});
Route::get('/layout', function () {
    return view('layout');
});


Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/service', function () {
    return view('service');
});
Route::get('/post', function () {
    return view('post');
});
