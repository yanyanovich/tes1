<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ModelTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tags=ModelTag::orderby('created_at','desc')->get();
        return view('admin.tag.index',['tags'=>$tags]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.tag.create');
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
        $new_category=new modelTag();
        $new_category->title=$request->title;
        $new_category->save();
        return redirect()->back()->withSuccess('Tag successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ModelTag  $modelTag
     * @return \Illuminate\Http\Response
     */
    public function show(ModelTag $modelTag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ModelTag  $modelTag
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelTag $tag)
    {
        //
        return view('admin.tag.edit',['tag'=>$tag]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ModelTag  $modelTag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModelTag $tag)
    {
        //
        $tag->title=$request->title;
        $tag->save();
        return redirect()->back()->withSuccess('Tag successfully update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ModelTag  $modelTag
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelTag $tag)
    {
        //
        $tag->delete();
        return redirect()->back()->withSuccess('Tag successfully delete');
    }

    private function validator($data, $id) {
        $unique = 'unique:tags,slug';
        if ($id) {
            // проверка на уникальность slug тега при редактировании,
            // исключая этот тег по идентифкатору в таблице БД tags
            $unique = 'unique:tags,slug,'.$id.',id';
        }
        $rules = [
            'name' => [
                'required',
                'string',
                'max:50',
            ],
            'slug' => [
                'required',
                'max:50',
                $unique,
                'regex:~^[-_a-z0-9]+$~i',
            ]
        ];
        $messages = [
            'required' => 'Поле «:attribute» обязательно для заполнения',
            'max' => 'Поле «:attribute» должно быть не больше :max символов',
        ];
        $attributes = [
            'name' => 'Наименование',
            'slug' => 'ЧПУ (англ.)'
        ];
        return Validator::make($data, $rules, $messages, $attributes);
    }
}
