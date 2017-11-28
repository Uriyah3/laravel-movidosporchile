<?php

namespace App\Http\Controllers;

use Auth;
use App\CentroAcopio;
use App\Medida;
use App\Medicion;
use App\Locacion;
use App\Region;
use App\Estado;
use Illuminate\Http\Request;
use App\Notifications\MedidaPublicada;

class CentroAcopioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check() && Auth::user()->rol->nombre == "Gobierno") {
            $centrosDeAcopio = CentroAcopio::withCount('bien')->orderBy('fecha_inicio', 'desc')->simplePaginate(10);
        } else {
            $centrosDeAcopio = CentroAcopio::aprobado()->withCount('bien')->orderBy('fecha_inicio', 'desc')->simplePaginate(10);
        }
        $mediciones = Medicion::all();

        return view('centros_de_acopio.index', compact('centrosDeAcopio', 'mediciones'));
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


        $request['locacion_id'] = factory(Locacion::class)->create(['comuna_id' => $request['comuna_id']])->id;
        $request['usuario_id'] = Auth::id();

        $request['medida_id'] = Medida::create(request(['usuario_id', 'objetivos', 'descripcion']))->id;
        $centro = CentroAcopio::create(request(['medida_id', 'locacion_id', 'estado_id', 'fecha_inicio', 'fecha_termino']));
        $centro->notify(new MedidaPublicada());

        return redirect( url('donaciones') );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CentroAcopio ID $centroAcopioID
     * @return \Illuminate\Http\Response
     */
    public function show($centroAcopioId)
    {
        $centroAcopio = CentroAcopio::where('id', $centroAcopioId)->withCount('bien')->first();
        return view('centros_de_acopio.show', compact('centroAcopio'));
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
    public function edit($centroAcopioId)
    {
        $centroAcopio = CentroAcopio::where('id', $centroAcopioId)->first();
        $regiones = Region::all();
        $estados = Estado::all();
        return view('centros_de_acopio.edit', compact('centroAcopio', 'regiones', 'estados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CentroAcopio  $centroAcopio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $centroAcopioId)
    {
        $centroAcopio = CentroAcopio::where('id', $centroAcopioId)->first();
        $centroAcopio->locacion->update(request(['comuna_id']));
        $centroAcopio->medida->update(request(['usuario_id', 'objetivos', 'descripcion', 'aprobada']));
        $centroAcopio->update(request(['medida_id', 'locacion_id', 'estado_id', 'fecha_inicio', 'fecha_termino']));
        return redirect(url('centros_de_acopio'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CentroAcopio  $centroAcopio
     * @return \Illuminate\Http\Response
     */
    public function destroy($centroAcopioId)
    {
        $centroAcopio = CentroAcopio::where('id', $centroAcopioId)->first();
        $centroAcopio->delete();
        return redirect( url('centros_de_acopio') );
    }
}
