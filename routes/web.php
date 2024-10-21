<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvaController;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', function () {
    return view('home', [
        'pageTitle' => 'Home',
        'metaTitle' => 'Home Page Laravel'
    ]);
});

Route::get('/prova', function(){
    // Only created
    $post1 = Post::factory()->make();

    // Saved in the database
    $user = Post::factory()->create();

    return $user;
});

// ---------- POSTS ----------
Route::get('/posts', function() {
    $posts = Post::all();

    return view ('posts.index', ['posts' => $posts]);
})->name('posts.index');

Route::get('/posts/create', [PostController::class, 'createPost']);

Route::get('/posts/delete/{id}', [PostController::class, 'deletePost']);