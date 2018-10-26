<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends \Illuminate\Foundation\Auth\User
{
  public function alamats()
 
 {
	 // buat join tablenya
	 
	 return $this->hasMany('App\Alamat');
	 
	 
  }	  //
}
