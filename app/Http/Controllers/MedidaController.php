<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medida;

class MedidaController extends Controller
{

	public function store()
	{
		return view('medidas.store');
	}


	public function index()
	{
		$medidas = Medida::with('centro_acopio', 'donacion', 'evento_a_beneficio', 'voluntariado')->where('aprobada', '=', true)->simplePaginate(10);

		return view('medidas.index', compact('medidas'));
	}


	public function create()
	{
		return view('medidas.create');
	}


	public function show($id)
	{
		return view('medidas.show');
	}


	public function edit($id)
	{
		return view('medidas.edit');
	}

	public function update($id)
	{
		return view('medidas.update');
	}


	public function delete($id)
	{
		return view('medidas.delete');
	}

}
