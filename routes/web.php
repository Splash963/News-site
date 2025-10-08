<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\AnnouncementController;
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
//Route::get('/news/announcement', [AnnouncementController::class, 'index'])->name('news.announcement');
Route::get('/', [AnnouncementController::class, 'homepage'])->name('home');
//Route::get('/update', [AnnouncementController::class, 'update'])->name('update');
Route::get('/show-news/politics', [NewsController::class, 'politics'])->name('news.politics');
Route::get('/show-news/crime', [NewsController::class, 'crime'])->name('news.crime');
Route::get('/show-news/sports', [NewsController::class, 'sports'])->name('news.sports');
Route::get('/show-news/world', [NewsController::class, 'world'])->name('news.world');
Route::get('/show-news/business', [NewsController::class, 'business'])->name('news.business');
Route::get('/show-news/education', [NewsController::class, 'education'])->name('news.education');
Route::get('/show-news/health', [NewsController::class, 'health'])->name('news.health');

// Route::resource('show-news', NewsController::class);
Route::resource('news-crud', NewsController::class);
Route::resource('announcement', AnnouncementController::class);