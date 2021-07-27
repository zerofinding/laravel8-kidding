<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Work;

class HomeControllers extends Controller
{
    public function index()
    {
        return view('index', [
            'title' => 'home',
            'blogs' => Post::get()->sortByDesc('date')->take(2),
            'works' => Work::get()->sortByDesc('date')->take(3)
        ]);
    }
}
