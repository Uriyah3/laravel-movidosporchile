<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedidaController extends Controller
{

	public function store()
	{
		return view('medidas.store');
	}


	public function index()
	{
		return view('medidas.index');
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
