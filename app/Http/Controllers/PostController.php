<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('kategori')) {
            $kategori = Kategori::firstWhere('slug', request('kategori'));
            $title = ' in ' . $kategori->name;
        }
        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' By ' . $author->name;
        }
        return view('posts', [
            "title" => 'All Posts' . $title,
            "active" => 'Posts',
            //"posts" => $posts->get()
            "posts" => Post::latest()->filter(request(['search', 'kategori', 'author']))->paginate(7)->withQueryString()
        ]);                  /// Eager Loading ////////
    }

    public function show(Post $post)
    {
        return view('post', [
            'title' => 'Single post',
            'active' => 'Posts',
            'post' => $post
        ]);
    }
}
