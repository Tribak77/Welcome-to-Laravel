<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'hello laravel';
});

Route::get('/about', function () {
    return view('about');
});
