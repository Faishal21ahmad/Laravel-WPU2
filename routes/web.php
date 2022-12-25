<?php

use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Models\Kategori;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
//     ]);     ->middleware('admin')                      /// Lazy Eager Loading /////
// });


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth'); 

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/kategoris', AdminKategoriController::class)->except('show')->middleware('admin');
