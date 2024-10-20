<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prova', function () {
    $calcolo = 5 + 5;
    return $calcolo;
});

// Combines two HTTP Verbs together
Route::match(['get','post'], '/prova', function () {
    return "Either get or post";
});

// Handles any HTTP Verb of this route in particular
Route::any('/any-method', function() {
    return "Any method!";
});

// Group some routes all together
Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        return "Users!";
    });
});

// Give a name to our route
Route::get('/profile', [ProfileController::class, 'show'])->name('profile');