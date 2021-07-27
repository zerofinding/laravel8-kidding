<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Work;

class WorkController extends Controller
{
    public function index()
    {
        return view('works.index', [
            'title' => 'works',
            'works' => Work::all()->sortByDesc('date')
        ]);
    }

    public function slug(Work $work)
    {
        return view('works.slug', [
            'title' => 'works - '. $work->title,
            'field' => $work
        ]);
    }
}
