<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'DOCKER LARAVEL WORKS 🚀';
});

Route::get('/', function () {
    return view('home'); // You can duplicate the logs logic for a preview here
});

Route::get('/logs', function () {
    return view('logs');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/about', function () {
    return view('about');
});