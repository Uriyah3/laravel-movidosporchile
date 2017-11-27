<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Bien;
use Auth;
use App\CentroAcopio;
use App\Medicion;

class BienController extends Controller
{


	public function create(){

        $centroAcopio = CentroAcopio::all();
        $medicion = Medicion::all();
        $bien  = Bien::all();

		return view('bienes.create',compact('centroAcopio','medicion','bien'));
	}

    //almacenar un nuevo bien 
    public function store()
    {
        $user = Auth::user();

        $request['usuario_id'] = $user['id'];
        

        $this->validate(request(), [
            'usuario_id' => 'required',
            'centro_acopio_id' => 'required',
            'medicion_id' => 'required',
            'tipo' => 'requiered',
            'cantidad' => 'requiered'
        ]);

        $bien  = Bien::create(
            request(['usuario_id','centro_acopio_id','medicion_id','tipo','cantidad']));

        if($bien->save()){
            return redirect(url('bienes'));
        }

        return redirect(url('bienes/create'));

    	
    }

    //mostrar todos los bienes
    public function index()
    { 
        $bien = Bien::all();

    	return view('bienes.index',compact('bien'));
    }

}
