<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table="Comment";

    public function User(){
    	return $this->belongsTo('App\User','idUser','id');
    }

    public function TinTuc(){
    	return $this->belongsTo('App\TinTuc','idTinTuc','id');
    }
}
