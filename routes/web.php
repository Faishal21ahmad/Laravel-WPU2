<?php

use App\Models\Kategori;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
        "title" => "Home",
        'active' => 'Home',
    ]);
});

Route::get('/about', function () {
    return view('about', [

        "title" => "About",
        'active' => 'About',
        "name" => "faishalbahy",
        "email" => "faisal2017bahi@gmail.com",
        "image" => "ku1.jpg"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/kategoris', function () {
    return view('kategoris', [
        'title' => 'Post kategoris',
        'active' => 'kategoris',
        'kategoris' => Kategori::all()
    ]);
});

Route::get('/kategoris/{kategori:slug}', function (Kategori $kategori) {
    return view('posts', [
        'title' => "Post By Kategori : $kategori->name",
        'active' => 'kategoris',
        'posts' => $kategori->posts->load('kategori', 'author')
    ]);                             /// Lazy Eager Loading /////
});

// Route::get('/authors/{author:username}', function (User $author) {
//     return view('posts', [
//         'title' => "Post By Author : $author->name",
//         'active' => 'posts',
//         'posts' => $author->posts->load('kategori', 'author')
//     ]);                           /// Lazy Eager Loading /////
// });


Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
