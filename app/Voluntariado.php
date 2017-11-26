<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voluntariado extends Model
{
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

    public function voluntario(){
    	return $this->hasMany('App\Voluntario');
    }

    public function locacion(){
    	return $this->belongsTo('App\Locacion');
    }

    public function actividad_voluntariado(){
        return $this->belongsTo('App\ActividadVoluntariado');
    }
}
