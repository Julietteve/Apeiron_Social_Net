<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
  public $table = "contact";
  public $guarded=[];


  protected $fillable = [
      "contact_name",
      "contact_email",
      "contact_issue",
      "contact_message",
     ];
}
