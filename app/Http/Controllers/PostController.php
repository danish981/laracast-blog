<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller {

    public function index() {
        // dd(request(['search'])); returns array
        // dd(request()->only('search'));   returns array
        // dd(request('search'));   returns string
        // ddd(Post::latest()->filter(request(['search']))->get());

        // filter the posts with query scope made in Post Model
        return view('posts.index', [
            'posts' => Post::latest()->filter(
                request(['search', 'category', 'author'])
            )->paginate(6)->withQueryString()
        ]);
    }

    public function show(Post $post) {
        return view('posts.show', [
            'post' => $post
        ]);
    }


}
