<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    //
    public function index()
    {
        $data = Post::all();
        return view('test-post', compact('data'));
    }
}
