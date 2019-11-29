<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Campaign;

class CampaignsModel extends Model
{
  {
      public $table = "Campaigns";
      public $guarded=[];


      protected $fillable = [
          'post_text'
      ];


      public function Users (){
        return $this->belongsTo(User::class);
      }

}
