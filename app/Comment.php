<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
class Comment extends Model
{
    //
    protected $fillable = array(
        'name',
        'comment',
        'user_id'
    );
    public function replies(){
    	return $this->hasMany('App\Reply');
    }
=======

class Comment extends Model
{
  protected $guarded = ['id'];
  public function post()
  {
    return $this->belongsTo('App\Post');
  }
>>>>>>> 2d4c7e3946e284aab8fe48021bed671429aced6e
}
