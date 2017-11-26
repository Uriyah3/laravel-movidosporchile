<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comuna;

class ComunaController extends Controller
{
    public function comunas($id){
		$comunas = Comuna::where('provincia_id', '=', $id)->get();
		return $comunas;
	}
}
