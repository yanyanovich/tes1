<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class indexController extends Controller
{
    //
    // public function index()
    // {
    //     $posts=Post::orderby('created_at','desc')->paginate(6);
    //     return view('main_page.welcome', compact('posts'));
    //     return redirect()->route('post.blog-page');
    // }
    public function index()
    {
        $posts=Post::orderby('created_at','desc')->paginate(6);
        return view('post.blog-page', compact('posts'));
    }
}
