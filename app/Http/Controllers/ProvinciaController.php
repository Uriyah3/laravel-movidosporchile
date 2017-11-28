<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Provincia;

class ProvinciaController extends Controller
{
	public function provincias($id){
		$provincias = Provincia::where('region_id', '=', $id)->get();
		return $provincias;
	}
}
