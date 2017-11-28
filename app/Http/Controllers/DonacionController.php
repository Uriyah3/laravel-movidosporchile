<?php

namespace App\Http\Controllers;

use Auth;
use App\Donacion;
use App\Locacion;
use App\Medida;
use Illuminate\Http\Request;
use App\Notifications\MedidaPublicada;

class DonacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check() && Auth::user()->rol->nombre == "Gobierno") {
            $donaciones = Donacion::orderBy('fecha_inicio', 'desc')->simplePaginate(10);
        } else {
            $donaciones = Donacion::aprobado()->orderBy('fecha_inicio', 'desc')->simplePaginate(10);
        }

        return view('donaciones.index', compact('donaciones'));
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

        $request['locacion_id'] = factory(Locacion::class)->create(['comuna_id' => $request['comuna_id']])->id;
        $request['usuario_id'] = Auth::id();

        $request['medida_id'] = Medida::create(request(['usuario_id', 'objetivos', 'descripcion']))->id;
        $donacion = Donacion::create(request(['medida_id', 'locacion_id', 'titular', 'rut_destinatario', 'nombre_banco', 'tipo_cuenta', 'cuenta', 'fecha_inicio', 'fecha_termino']));
        $donacion->notify(new MedidaPublicada());

        return redirect( url('donaciones') );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Donacion ID $donacionId
     * @return \Illuminate\Http\Response
     */
    public function show($donacionId)
    {
        $donacion = Donacion::where('id', $donacionId)->withCount('deposito')->first();
        $monto = 0;
        foreach ($donacion->deposito as $valor) {
            $monto = $monto + $valor->monto;
        }
        return view('donaciones.show', compact('donacion', 'monto'));
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Donacion  $donacion
     * @return \Illuminate\Http\Response
     */
    public function edit($donacionId)
    {
        $donacion = Donacion::where('id', $donacionId)->first();
        return view('donaciones.edit', compact('donacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Donacion  $donacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $donacionId)
    {
        $donacion = Donacion::where('id', $donacionId)->first();
        $donacion->medida->update(request(['usuario_id', 'objetivos', 'descripcion', 'aprobada']));
        $donacion->update(request(['medida_id', 'locacion_id', 'titular', 'rut_destinatario', 'nombre_banco', 'tipo_cuenta', 'cuenta', 'fecha_inicio', 'fecha_termino']));
        return redirect(url('donaciones'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Donacion  $donacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($donacionId)
    {
        $donacion = Donacion::where('id', $donacionId)->first();
        $donacion->delete();
        return redirect( url('donaciones') );
    }
}
