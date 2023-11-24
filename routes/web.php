<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TblLinksController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;

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








Auth::routes();

 // Home Page Routes
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);

// Dashboard Page Routes

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/dashboard/links', [App\Http\Controllers\TblLinksController::class, 'index'])->middleware('auth')->name('links');
Route::get('/dashboard/payouts', [App\Http\Controllers\DashboardController::class, 'payouts_index'])->middleware('auth')->name('payouts');
Route::get('/dashboard/support', [App\Http\Controllers\DashboardController::class, 'support_index'])->middleware('auth')->name('support');
Route::get('/dashboard/info', [App\Http\Controllers\DashboardController::class, 'info_index'])->middleware('auth')->name('info');
Route::get('/dashboard/referrals', [App\Http\Controllers\DashboardController::class, 'referrals_index'])->middleware('auth')->name('referrals');

// CRUD for LINKS

Route::post('/dashboard/links', [App\Http\Controllers\TblLinksController::class, 'store'])->middleware('auth');
Route::delete('/dashboard/links/{short_url}', [App\Http\Controllers\TblLinksController::class, 'destroy'])->middleware('auth');


// Shortener Routes

Route::get('/r/{id}', [App\Http\Controllers\TblLinksController::class, 'ShowAdvertising'])->name('redirect');










