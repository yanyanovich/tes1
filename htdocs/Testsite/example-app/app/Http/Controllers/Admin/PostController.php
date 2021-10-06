<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\ModelTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts=Post::orderby('created_at','DESC')->get();

        return view('admin.post.index',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories=Category::orderBy('created_at','Desc')->get();
        $tags=ModelTag::all();
        return view('admin.post.create',['categories'=>$categories,
        'tag'=>$tags
    ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $post=new Post();
        $post->title=$request->title;
        $post->img=$request->img;
        $post->text=$request->text;
        // $post->cat_id=$request->cat_id;
        // $post->tag_ids=$request->tag_ids;
        $post->save();
        // $data=$request->validate();
        // $data['img']=Storage::put('/images', $data);
        // Post::firstOrCreate($data);
        return redirect()->back()->withSuccess('Article was added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        $categories=Category::orderBy('created_at','Desc')->get();
        return view('admin.post.edit',['post'=>$post,
        'categories'=>$categories,
    ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        $post->title=$request->title;
        $post->img=$request->img;
        $post->text=$request->text;
        // $post->cat_id=$request->cat_id;
        // $post->tag_ids=$request->tag_ids;
        $post->save();
        // $data=$request->validate();
        // $data['img']=Storage::put('/images', $data);
        // Post::firstOrCreate($data);
        return redirect()->back()->withSuccess('Article was update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        $post->delete();
        return redirect()->back()->withSuccess('Article was delete');
    }
}
