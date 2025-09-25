<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/politics', function () {
    return view('politics');
})->name('politics');

Route::get('/admin-dashboard', function () {
    return view('admin.admin-dashboard');
})->name('admin-dashboard');