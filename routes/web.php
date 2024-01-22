<?php

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/', function () {
    return view("home", ["title" => "Home"]);
});

Route::get('/about', function () {
    return view("about", [
        "title" => "About",
        "name" => "Fiki Aprian",
        "email" => "fikiaprian23@gmail.com",
        "image" => "fiki.png"
    ]);
});

Route::get('/blog', [PostController::class, "index"]);
Route::get('/blog/{post:slug}', [PostController::class, "show"]);

Route::get('/categories', function (Category $category) {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all(),
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('blog', [
        'title' => "Posts by category : $category->name",
        'posts' => $category->posts->load('category', 'author'),
    ]);
});

Route::get('/author/{author:username}', function (User $author) {
    return view('blog', [
        'title' => "Post by author : $author->name",
        'posts' => $author->posts->load('category', 'author'),

    ]);
});
