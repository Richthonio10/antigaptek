<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';

    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
