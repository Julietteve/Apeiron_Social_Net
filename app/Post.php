<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Post extends Model
{
    public $table = "post";
    public $guarded=[];


    protected $fillable = [
        'post_text'
    ];


    public function Users (){
      return $this->belongsTo(User::class);
    }


}
