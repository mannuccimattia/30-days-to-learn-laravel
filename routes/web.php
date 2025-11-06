<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
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
