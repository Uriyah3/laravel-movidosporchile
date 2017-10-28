<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    //

    public function comuna(){
    	return $this->hasMany('App\Comuna');
    }

    public function region(){
    	return $this->belongsTo('App\Region');
    }
}
