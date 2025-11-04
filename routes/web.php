<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contacts', 'contacts')->name('contacts');
