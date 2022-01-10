<?php

use App\Http\Controllers\PostController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('authors/{author:username}', static function (User $author) {
    return view('posts', [
        'posts' => $author->posts
    ]);
});
