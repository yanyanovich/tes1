<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Extension\Table\Table;

class Post extends Model
{
    use HasFactory;
    protected $table='posts';
    protected $quarded=false; 

    public function categories()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
    // public function tags()
    // {
    //     return $this->belongsToMany(Tag::class,'post_tags','post_id','tag_id');
    // }
}
