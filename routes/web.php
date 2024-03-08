<?php

use App\Models\Post;
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
    return view('home', [
        "title" => "Home"
    ]);
});


Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Abid Abiyyu Imani",
        "email" => "abid.abiyyu490@smk.belajar.id",
        "image" => "abid.jpg"
    ]);
});

// halaman posts
Route::get('/blog', [PostController::class, 'index']);
// halaman single post
route::get('/posts/{slug}', [PostController::class, 'show']);