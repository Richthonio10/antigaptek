<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
	  public function replies()
 
 {
	 // buat join tablenya
	 
	 return $this->hasMany('App\Reply');
	 
	 
  }	  //
    //
}
