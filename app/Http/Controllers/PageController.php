<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
//use pagination for paginate
use Illuminate\Pagination\Paginator;

class PageController extends Controller
{
    public function posts()
    {
        return view('posts', [
            'posts' => Post::with('user')->latest()->paginate(5)
        ]);
    }

    public function post(Post $post)
    {
        return view('post', [
            'post' => $post
        ]);
    }
}
