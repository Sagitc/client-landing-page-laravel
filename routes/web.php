<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/services', function () {
    return view('home');
})->name('services');

Route::get('/about', function () {
    return view('home');
})->name('about');
