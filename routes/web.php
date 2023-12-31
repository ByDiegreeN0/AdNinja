<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TblLinksController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;



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
Route::get('/dashboard/support', [App\Http\Controllers\DashboardController::class, 'support_index'])->middleware('auth')->name('support');
Route::get('/dashboard/info', [App\Http\Controllers\DashboardController::class, 'info_index'])->middleware('auth')->name('info');
Route::get('/dashboard/referrals', [App\Http\Controllers\DashboardController::class, 'referrals_index'])->middleware('auth')->name('referrals');

// CRUD for LINKS

Route::post('/dashboard/links', [App\Http\Controllers\TblLinksController::class, 'store'])->middleware('auth');
Route::delete('/dashboard/links/{url_id}', [App\Http\Controllers\TblLinksController::class, 'destroy'])->middleware('auth');


// PayOut Routes
Route::get('/dashboard/payouts', [App\Http\Controllers\TblPayoutsDataController::class, 'index'])->middleware('auth')->name('payouts');
Route::get('/dashboard/payout-edit',[App\Http\Controllers\TblPayoutsDataController::class, 'edit'])->middleware('auth')->name('payout-edit');
Route::patch('/dashboard/payout-edit', [App\Http\Controllers\TblPayoutsDataController::class, 'update'])->middleware('auth')->name('payout-edit.update');

// Shortener Routes

Route::get('/r/{short_url}', [App\Http\Controllers\TblLinksController::class, 'ShowAdvertising'])->name('redirect');










