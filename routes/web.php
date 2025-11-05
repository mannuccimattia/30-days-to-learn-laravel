<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;



Route::view('/', 'home')->name('home');

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(3);

    return view('jobs.index', compact('jobs'));
})->name("jobs");

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) {

    $job = Job::find($id);

    return view('jobs.show', compact('job'));
});

Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect()->route('jobs');
});

Route::view('/contacts', 'contacts')->name('contacts');
