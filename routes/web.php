<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeControllers;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WorkController;

// use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeControllers::class, 'index']);

Route::get('/now', function () {
    
    return view('now', [
        'title' => 'now'
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('/blog/{post:slug}', [PostController::class, 'slug']);

// Route::get('/category/{category:slug}', function(Category $category){
//     return view('category.slug', [
//         'title' => 'category - '. $category->name,
//         'blogs' => $category->posts,
//         'category' => $category->name
//     ]);
// });
Route::get('/category/{category:slug}', [CategoryController::class, 'slug']);

Route::get('/works', [WorkController::class, 'index']);
Route::get('/works/{work:slug}', [WorkController::class, 'slug']);
