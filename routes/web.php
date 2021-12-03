<?php


use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('posts', [
        'posts' => Post::all()
    ]);
});



Route::get('/posts/{slug}', function ($slug) {

    return view('post', [
        'post' => Post::findOrFail($slug)
    ]);

});

