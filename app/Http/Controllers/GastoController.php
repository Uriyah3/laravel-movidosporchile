<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gasto;

class GastoController extends Controller
{

    public function store()
    {
    	return view('gastos.store');
    }


    //mostrar todos los gastos
    public function index()
    {
        $gastos = Gasto::with('usuario')->orderBy('fecha', 'desc')->paginate(10);

    	return view('gastos.index',compact('gastos'));
    }


    public function create()
    {
    	return view('gastos.create');
    }


    public function show($id)
    {
    	return view('gastos.show');
    }

}
