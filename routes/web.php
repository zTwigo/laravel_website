<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvaController;

Route::get('/', function () {
    return view('home', [
        'pageTitle' => 'Home',
        'metaTitle' => 'Home Page Laravel'
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/example', function() {
    $items = ['Item1', 'Item2', 'Item3'];
    $title = 'Blade example';
    $numbers = [1,2,3];
    $emptyArray = [1];
    $someValue = 'qualcosa';

    // Compact function creates a dictionary
    return view('example', compact('items','title','numbers','emptyArray','someValue'));
});

// Array of two elements in which:
// 1: the first one is the class we are using a method from
// 2: the function we want to use from that class
Route::get('/prova', [ProvaController::class, 'calculate']);

Route::post('/form', [ProvaController::class, 'fetchData']);