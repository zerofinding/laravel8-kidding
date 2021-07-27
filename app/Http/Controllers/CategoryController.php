<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    public function slug(Category $category)
    {
        return view('category.slug', [
	        'title' => 'category - '. $category->name,
	        'blogs' => $category->posts,
	        'category' => $category->name
	    ]);
    }
}
