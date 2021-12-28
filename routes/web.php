<?php

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', static function () {

    \Illuminate\Support\Facades\DB::listen(function($query) {
        logger($query->sql, $query->bindings);
    });

    return view('posts', [
        'posts' => Post::all()
    ]);
});


Route::get('/posts/{post:slug}', static function (Post $post) {
    return view('post', [
        'post' => $post
    ]);
});


Route::get('/categories/{category:slug}', static function(Category $category) {
    return view('posts', [
        'posts' => $category->posts
    ]);
});
