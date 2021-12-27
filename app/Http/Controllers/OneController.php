<?php

namespace App\Http\Controllers;
use App\Models\Post;


use Illuminate\Http\Request;

class OneController extends Controller
{
    public function find($id) {
        return Post::findOrFail($id)
    }
}
