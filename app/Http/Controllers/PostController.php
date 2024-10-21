<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    function createPost(){
        $post = Post::create([
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return view('posts.create', ['post' => $post]);
    }

    function deletePost($id){
        $post = Post::find($id);

        if($post){
            $post->delete();
            $message = "Post $id deleted";
        } else {
            $message = "Post $id not found at all.";
        }

        return view('posts.delete', ['message' => $message]);
    }
}
