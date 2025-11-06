<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

/**
 * Check routes with:
 * 
 * php artisan route:list --except-vendor
 */
Route::view('/', 'home')->name('home');
Route::view('/contacts', 'contacts')->name('contacts');

Route::resource('jobs', JobController::class);

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
