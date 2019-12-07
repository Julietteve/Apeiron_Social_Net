<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\Campaigns;

class Campaigns extends Model
{
  public $table = "campaigns";
  public $guarded=[];


  protected $fillable = [
      'campaign_description',
      'campaign_image',
     ];


  public function Users (){
    return $this->belongsTo(User::class);
}
}
