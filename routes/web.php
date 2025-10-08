<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\PoliticsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/admin-dashboard', function () {
    return view('admin.admin-dashboard');
})->name('admin-dashboard');

Route::get('/add-news', function () {
    return view('admin.add-news');
})->name('add-news');

Route::get('/admin-dashboard', function () {
    return view('admin.admin-dashboard');
})->name('admin-dashboard');



// Show News
Route::get('/', [AnnouncementController::class, 'homepage'])->name('home');

Route::get('/show-news/politics', [PoliticsController::class, 'view_data'])->name('news.politics');
Route::get('/show-news/crime', [NewsController::class, 'crime'])->name('news.crime');
Route::get('/show-news/sports', [NewsController::class, 'sports'])->name('news.sports');
Route::get('/show-news/world', [NewsController::class, 'world'])->name('news.world');
Route::get('/show-news/business', [NewsController::class, 'business'])->name('news.business');
Route::get('/show-news/education', [NewsController::class, 'education'])->name('news.education');
Route::get('/show-news/health', [NewsController::class, 'health'])->name('news.health');

Route::resource('news-crud', NewsController::class);
Route::resource('announcement', AnnouncementController::class);
Route::resource('politics', PoliticsController::class);