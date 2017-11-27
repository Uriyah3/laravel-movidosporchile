<?php

namespace App\Http\Controllers;

use Auth;
use App\Donacion;
use App\Locacion;
use App\Medida;
use Illuminate\Http\Request;

class DonacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donaciones = Donacion::aprobado()->simplePaginate(10);

        return view('donaciones.index', compact('donaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('donaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
    {
        $this->validate(request(), [
            'objetivos' => 'required|string',
            'titular' => 'required|string',
            'rut_destinatario' => 'required|string',
            'nombre_banco' => 'required|string',
            'tipo_cuenta' => 'required|string',
            'cuenta' => 'required|string',
            'fecha_inicio' => 'required|date',
            'fecha_termino' => 'required|date|after:fecha_inicio'
        ]);

        $user = Auth::user();
        $request['locacion_id'] = factory(Locacion::class)->create(['comuna_id' => $request['comuna_id']])->id;
        $request['usuario_id'] = $user['id'];

        $request['medida_id'] = Medida::create(request(['usuario_id', 'objetivos', 'descripcion']))->id;
        EventoABeneficio::create(request(['medida_id', 'locacion_id', 'titular', 'rut_destinatario', 'nombre_banco', 'tipo_cuenta', 'cuenta', 'fecha_inicio', 'fecha_termino']));

        return redirect( url('donaciones') );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Donacion  $donacion
     * @return \Illuminate\Http\Response
     */
    public function show(Donacion $donacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Donacion  $donacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Donacion $donacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Donacion  $donacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donacion $donacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Donacion  $donacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donacion $donacion)
    {
        //
    }
}
