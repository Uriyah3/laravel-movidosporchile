<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventoABeneficio extends Model
{
    //
    public function locacion(){
    	return $this->belongsTo('App\Locacion');
    }
}
