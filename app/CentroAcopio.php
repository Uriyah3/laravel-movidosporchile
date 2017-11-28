<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class CentroAcopio extends Model
{
    use Notifiable; 
    protected $guarded = [];


    public function scopeAprobado($query){
        return $query->whereHas('medida', function ($innerQuery) {
            $innerQuery->where('aprobada', '=', true);
        });
    }

    //
    public function medida(){
        return $this->belongsTo('App\Medida');
    }

    public function bien(){
    	return $this->hasMany('App\Bien');
    }

    public function estado(){
    	return $this->belongsTo('App\Estado');
    }

    public function locacion(){
        return $this->belongsTo('App\Locacion');
    }
}
