<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('blog.index', [
            'title' => 'blog',
            'blogs' => Post::all()->sortByDesc('date')
        ]);
    }

    public function slug(Post $post)
    {
        return view('blog.slug', [
            'title' => 'blog - '. $post->title,
            'field' => $post
        ]);
    }
}
