<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $table = "post";
    public $guarded=[];


    protected $fillable = [
        'post_text'
    ];

}
