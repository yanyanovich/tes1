<?php

namespace App\Http\Controllers\admin;
use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $post_count = Post::all()->count();
        $categories_count=Category::all()->count();
        return view('admin.home.index',['post_count'=>$post_count,'categories_count'=>$categories_count]);
    }
}
