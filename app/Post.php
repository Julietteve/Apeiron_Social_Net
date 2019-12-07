<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Post extends Model
{
    public $table = "posts";
    public $guarded=[];


    protected $fillable = [
        'post_text',
        'post_image',
      'post_video' ,
       ];


    public function Users (){
      return $this->belongsTo(User::class);
    }

    public function Comments (){
      return $this->hasMany(Post::class);
    }



}
