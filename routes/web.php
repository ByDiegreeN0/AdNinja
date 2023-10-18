<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TblLinksController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





route::get('/', function() {
    return view('AdLinkShortener.home');
});


Route::resource('admin/dashboard/links', TblLinksController::class);


Auth::routes();


Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/dashboard/links', [App\Http\Controllers\DashboardController::class, 'links_index'])->middleware('auth')->name('links');
Route::get('/dashboard/payouts', [App\Http\Controllers\DashboardController::class, 'payouts_index'])->middleware('auth')->name('payouts');
Route::get('/dashboard/support', [App\Http\Controllers\DashboardController::class, 'support_index'])->middleware('auth')->name('support');
Route::get('/dashboard/info', [App\Http\Controllers\DashboardController::class, 'info_index'])->middleware('auth')->name('info');

// CRUD for LINKS
Route::post('/dashboard/links', [App\Http\Controllers\DashboardController::class, 'store_link'])->middleware('auth');
Route::delete('/dashboard/links/{url_id}', [App\Http\Controllers\DashboardController::class, 'destroy_link'])->middleware('auth');


// Shortener

Route::get('/r/{id}', [App\Http\Controllers\DashboardController::class, 'LinkRedirect'])->name('redirect');









