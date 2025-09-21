<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/activities', function () {
    return view('activities');
})->middleware(['auth', 'verified'])->name('activities');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware(['auth'])->group(function () {
        Route::get('/workshops', [App\Http\Controllers\WorkshopController::class, 'index'])->name('workshops.index');
    });

Route::get('/workshops_activities', function () {
    return view('workshops_activities');
})->middleware(['auth', 'verified'])->name('workshops_activities');


Route::get('/', function () {
    return view('welcome');
});


Route::get('/workshop', function () {
    return view('workshop');
});


Route::get('/about_us', function () {
    return view('about_us');
});


Route::get('/activities_esc', function () {
    return view('activities_esc');
});

Route::get('/activities', function () {
    return view('activities');
});

Route::get('/workshop_activities', function () {
    return view('workshop_activities');
});
