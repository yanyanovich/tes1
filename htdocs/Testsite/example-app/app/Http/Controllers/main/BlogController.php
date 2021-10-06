<?php

namespace App\Http\Controllers\main;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    //
    public function show ($id)
    {
        $tmp=Post::where('id',$id)->first();
        return view('post.show',['tmp'=> $tmp]);
    }
}
