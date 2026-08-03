<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/services', function () {
    return view('welcome');
})->name('services');

Route::get('/about', function () {
    return view('welcome');
})->name('about');
