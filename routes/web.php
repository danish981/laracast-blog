<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', static function () {
    return view('posts', [
        'posts' => Post::all()
    ]);
});


// now, route model binding, we will learn
Route::get('/posts/{post:slug}', static function (Post $post) {
    return view('post', [
        'post' => $post
    ]);
});
