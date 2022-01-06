<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;

use Illuminate\Support\Facades\Route;

Route::get('/', static function () {
    $posts = Post::latest();
    if (request('search')) {
        $posts
            ->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('body', 'like', '%' . request('search') . '%');
    }

    return view('posts', [
        'posts' => $posts->get(),
        'categories' => Category::all()
    ]);
})->name('home');


Route::get('posts/{post:slug}', static function (Post $post) {
    return view('post', [
        'post' => $post,
        'categories' => Category::all()
    ]);
});


Route::get('categories/{category:slug}', static function (Category $category) {
    return view('posts', [
        'posts' => $category->posts,
        'currentCategory' => $category,
        'categories' => Category::all()
    ]);
})->name('category');


Route::get('authors/{author:username}', static function (User $author) {
    return view('posts', [
        'posts' => $author->posts,
        'categories' => Category::all()
    ]);
});
