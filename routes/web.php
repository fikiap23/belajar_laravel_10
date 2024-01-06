<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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
    return view("about", ["title" => "About", "name" => "Fiki Aprian", "email" => "fikiaprian23@gmail.com", "image" => "fiki.png"]);
});

Route::get('/blog', [PostController::class, "index"]);

// halaman single blog
Route::get('/blog/{post:slug}', [PostController::class, "show"]);
