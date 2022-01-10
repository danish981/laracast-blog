<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // dd(request(['search'])); returns array
        // dd(request()->only('search'));   returns array
        // dd(request('search'));   returns string
        // ddd(Post::latest()->filter(request(['search']))->get());

        // filter the posts with query scope made in Post Model
        return view('posts', [
            'posts' => Post::latest()->filter(request(['search', 'category']))->get(),
            'categories' => Category::all(),
            'currentCategory' => Category::firstWhere('slug', request('category'))
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }
}
