<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\CrimeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PoliticsController;
use App\Http\Controllers\SportsController;
use App\Http\Controllers\WorldController;
use Illuminate\Support\Facades\Route;


Route::get('/admin-dashboard', function () {
    return view('admin.admin-dashboard');
})->name('admin-dashboard');

Route::get('/add-news', function () {
    return view('admin.add-news');
})->name('add-news');




// Show News
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/news', [NewsController::class, 'index'])->name('news');


Route::get('/show-news/politics', [PoliticsController::class, 'view_data'])->name('news.politics');
Route::get('/show-news/crime', [CrimeController::class, 'view_data'])->name('news.crime');
Route::get('/show-news/sports', [SportsController::class, 'view_data'])->name('news.sports');
Route::get('/show-news/world', [WorldController::class, 'view_data'])->name('news.world');
Route::get('/show-news/business', [BusinessController::class, 'view_data'])->name('news.business');
Route::get('/show-news/education', [NewsController::class, 'education'])->name('news.education');
Route::get('/show-news/health', [NewsController::class, 'health'])->name('news.health');


Route::resource('announcement', AnnouncementController::class);
Route::resource('politics', PoliticsController::class);
Route::resource('crime', CrimeController::class);
Route::resource('sports', SportsController::class);
Route::resource('world', WorldController::class);
Route::resource('business', BusinessController::class);
Route::resource('news-crud', HomeController::class);
