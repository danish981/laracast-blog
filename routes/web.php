<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;

use Illuminate\Support\Facades\Route;

Route::get('/', static function () {
    return view('posts', [
        'posts' => Post::latest()->get()
    ]);
});

Route::get('posts/{post:slug}', static function (Post $post) {
    return view('post', [
        'post' => $post
    ]);
});

Route::get('categories/{category:slug}', static function (Category $category) {
    return view('posts', [
        'posts' => $category->posts
    ]);
});

Route::get('authors/{author:username}', static function (User $author) {
    return view('posts', [
        'posts' => $author->posts
    ]);
});


