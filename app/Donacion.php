<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donacion extends Model
{
	public function scopeAprobado($query){
        return $query->whereHas('medida', function ($innerQuery) {
            $innerQuery->where('aprobada', '=', true);
        });
    }

    //
	public function medida(){
		return $this->belongsTo('App\Medida');
	}

    public function deposito(){
    	return $this->hasMany('App\Deposito');
    }
}
