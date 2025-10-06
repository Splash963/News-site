<?php

use App\Http\Controllers\NewsController;
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

Route::get('/add-news', function () {
    return view('admin.add-news');
})->name('add-news');

Route::get('/admin-dashboard', function () {
    return view('admin.admin-dashboard');
})->name('admin-dashboard');



// News Routes
Route::get('/show-news/politics', [NewsController::class, 'politics'])->name('news.politics');
Route::get('/show-news/crime', [NewsController::class, 'crime'])->name('news.crime');


// Route::resource('show-news', NewsController::class);
