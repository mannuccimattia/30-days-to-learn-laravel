<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'home')->name('home');

Route::view('/jobs', 'jobs', [
    "jobs" => Job::all()
])->name('jobs');

Route::get('/jobs/{id}', function ($id) {

    $job = Job::find($id);

    return view('job', compact('job'));
});

Route::view('/contacts', 'contacts')->name('contacts');
