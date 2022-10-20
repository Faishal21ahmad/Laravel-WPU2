<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Models\Kategori;
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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "faishalbahy",
        "email" => "faisal2017bahi@gmail.com",
        "image" => "ku1.jpg"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/kategoris', function () {
    return view('kategoris', [
        'title' => 'Post kategoris',
        'kategoris' => Kategori::all()
    ]);
});

Route::get('/kategoris/{kategori:slug}', function (Kategori $kategori) {
    return view('kategori', [
        'title' => $kategori->name,
        'posts' => $kategori->posts,
        'kategori' => $kategori->name
    ]);
});
