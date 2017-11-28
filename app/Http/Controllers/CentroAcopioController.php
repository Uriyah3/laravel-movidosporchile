<?php

namespace App\Http\Controllers;

use Auth;
use App\CentroAcopio;
use App\Medida;
use App\Locacion;
use App\Region;
use App\Estado;
use Illuminate\Http\Request;

class CentroAcopioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $centrosDeAcopio = CentroAcopio::aprobado()->simplePaginate(10);

        return view('centros_de_acopio.index', compact('centrosDeAcopio'));
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
            'estado_id' => 'required',
            'fecha_inicio' => 'required|date',
            'fecha_termino' => 'required|date|after:fecha_inicio'
        ]);

        $user = Auth::user();
        $request['locacion_id'] = factory(Locacion::class)->create(['comuna_id' => $request['comuna_id']])->id;
        $request['usuario_id'] = $user['id'];

        $request['medida_id'] = Medida::create(request(['usuario_id', 'objetivos', 'descripcion']))->id;
        EventoABeneficio::create(request(['medida_id', 'locacion_id', 'estado_id', 'fecha_inicio', 'fecha_termino']));

        return redirect( url('donaciones') );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CentroAcopio  $centroAcopio
     * @return \Illuminate\Http\Response
     */
    public function show(CentroAcopio $centroAcopio)
    {
        //
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regiones = Region::all();
        $estados = Estado::all();
        return view('centros_de_acopio.create', compact('regiones', 'estados'));
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CentroAcopio  $centroAcopio
     * @return \Illuminate\Http\Response
     */
    public function edit(CentroAcopio $centroAcopio)
    {
         $regiones = Region::all();
        $estados = Estado::all();
        return view('centros_de_acopio.edit', compact('regiones', 'estados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CentroAcopio  $centroAcopio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CentroAcopio $centroAcopio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CentroAcopio  $centroAcopio
     * @return \Illuminate\Http\Response
     */
    public function destroy(CentroAcopio $centroAcopio)
    {
        //
    }
}
