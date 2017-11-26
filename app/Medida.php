<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medida extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    protected $fillable = ['usuario_id', 'aprobada', 'objetivos', 'descripcion'];

    //
    public function usuario() {
    	return $this->belongsTo('App\Usuario');
    }

    public function comentario() {
        return $this->hasMany('App\Comentario');
    }

    public function centro_acopio(){
        return $this->hasMany('App\CentroAcopio');
    }

    public function donacion(){
        return $this->hasMany('App\Donacion');
    }

    public function evento_a_beneficio() {
        return $this->hasMany('App\EventoABeneficio');
    }

    public function voluntariado(){
        return $this->hasMany('App\Voluntariado');
    }
}
