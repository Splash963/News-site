<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\CrimeController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\HealthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PoliticsController;
use App\Http\Controllers\SportsController;
use App\Http\Controllers\WorldController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

Route::get('/admin', function () {
    return view('admin.admin-dashboard');
})->name('admin')->middleware('auth');

Route::get('/add-news', function () {
    return view('admin.add-news');
})->name('add-news');

Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/login');
})->name('logout');




// Show News
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/news', [NewsController::class, 'index'])->name('news');

// Admin Show Data Routes
Route::get('/show-news/politics', [PoliticsController::class, 'view_data'])->name('news.politics');
Route::get('/show-news/crime', [CrimeController::class, 'view_data'])->name('news.crime');
Route::get('/show-news/sports', [SportsController::class, 'view_data'])->name('news.sports');
Route::get('/show-news/world', [WorldController::class, 'view_data'])->name('news.world');
Route::get('/show-news/business', [BusinessController::class, 'view_data'])->name('news.business');
Route::get('/show-news/education', [EducationController::class, 'view_data'])->name('news.education');
Route::get('/show-news/health', [HealthController::class, 'view_data'])->name('news.health');

// User View Data Routes
Route::resource('home', HomeController::class);
Route::resource('announcement', AnnouncementController::class);
Route::resource('politics', PoliticsController::class);
Route::resource('crime', CrimeController::class);
Route::resource('sports', SportsController::class);
Route::resource('world', WorldController::class);
Route::resource('business', BusinessController::class);
Route::resource('education', EducationController::class);
Route::resource('health', HealthController::class);

// Clicked Data showing Route
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');

// Middleware Routes
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
