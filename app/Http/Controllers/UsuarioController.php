<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Usuario;

class UsuarioController extends Controller
{

    public function index()
	{

		return view('actividades.index');
	}

	public function destroy($id){
		$usuario = Usuario::where('id', $id)->first();
		if($usuario != null) {
			$usuario->delete();
		}
		return redirect( url()->previous()[0] );
	}
}
