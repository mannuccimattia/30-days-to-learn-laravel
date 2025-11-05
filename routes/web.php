<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;



Route::view('/', 'home')->name('home');

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->simplePaginate(3);

    return view('jobs.index', compact('jobs'));
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) {

    $job = Job::find($id);

    return view('jobs.show', compact('job'));
});

Route::post('/jobs', function () {
    //
});

Route::view('/contacts', 'contacts')->name('contacts');
