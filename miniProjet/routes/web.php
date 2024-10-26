<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AboutController;

use App\Http\Controllers\ContactController;


Route::get('/', function(){
    return view('home') ;
});


Route::get('/about', [AboutController::class, 'about']);

Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

