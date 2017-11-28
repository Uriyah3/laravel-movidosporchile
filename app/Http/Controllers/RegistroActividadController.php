<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\RegistroActividad;
use App\Usuario;
use App\TipoActividad;


class RegistroActividadController extends Controller
{




	//mostrar todo el registro de actividades del usuario activo
	public function index()
	{

		$registroActividades = RegistroActividad::where('usuario_id','=',Auth::id())->orderBy('created_at','desc')->paginate(7);

		$usuarios = Usuario::where('id','=',Auth::id())->first();

		return view('actividades.index',compact('registroActividades','usuarios'));
	}


	//almacenar nuevo registro de actividad
	public function store()
	{
		$user = Auth::user();

        $this->validate(request(), [
            'tipo_actividad_id' => 'required',
            'usuario_id' => 'required',
            'created_at' => 'required',
            'updated_at' => 'requiered'
        ]);


        $registroActividades = RegistroActividad::create(
            request(['usuario_id','tipo_actividad_id','created_at','updated_at']));

        if($registroActividades-> save()){
            return view('actividades.index');
        }

		return view('actividades.store');
	}


}
