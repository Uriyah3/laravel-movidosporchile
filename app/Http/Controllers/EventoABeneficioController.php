<?php

namespace App\Http\Controllers;

use Auth;
use App\EventoABeneficio;
use App\Region;
use App\Locacion;
use App\Medida;
use Illuminate\Http\Request;
use App\Notifications\MedidaPublicada;

class EventoABeneficioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check() && Auth::user()->rol->nombre == "Gobierno") {
            $eventoAbeneficios = EventoABeneficio::orderBy('fecha', 'desc')->simplePaginate(10);
        } else {
            $eventoAbeneficios = EventoABeneficio::aprobado()->orderBy('fecha', 'desc')->simplePaginate(10);
        }

        return view('eventos_a_beneficio.index', compact('eventoAbeneficios'));
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
            'fecha' => 'required|date',
            'horario_inicio' => 'required|date_format:H:i',
            'horario_termino' => 'required|date_format:H:i|after:horario_inicio',
            'actividades' => 'required|string'
        ]);

        $request['locacion_id'] = factory(Locacion::class)->create(['comuna_id' => $request['comuna_id']])->id;
        $request['usuario_id'] = Auth::id();

        $request['medida_id'] = Medida::create(request(['usuario_id', 'objetivos', 'descripcion']))->id;
        $evento = EventoABeneficio::create(request(['medida_id', 'locacion_id', 'actividades', 'fecha', 'horario_inicio', 'horario_termino']));
        $evento->notify(new MedidaPublicada());

        return redirect( url('eventos_a_beneficio') );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EventoABeneficio  $eventoABeneficio
     * @return \Illuminate\Http\Response
     */
    public function show($eventoABeneficioId)
    {
        $eventoABeneficio = EventoABeneficio::where('id', $eventoABeneficioId)->first();
        return view('eventos_a_beneficio.show', compact('eventoABeneficio'));
    }

/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regiones = Region::all();

        return view('eventos_a_beneficio.create', compact('regiones'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EventoABeneficio  $eventoABeneficio
     * @return \Illuminate\Http\Response
     */
    public function edit($eventoABeneficioId)
    {
        $eventoABeneficio = EventoABeneficio::where('id', $eventoABeneficioId)->first();
        $regiones = Region::all();

        return view('eventos_a_beneficio.edit', compact('eventoABeneficio', 'regiones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EventoABeneficio  $eventoABeneficio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $eventoABeneficioId)
    {
        $eventoABeneficio = EventoABeneficio::where('id', $eventoABeneficioId)->first();
        $eventoABeneficio->locacion->update(request(['comuna_id']));
        $eventoABeneficio->medida->update(request(['usuario_id', 'objetivos', 'descripcion', 'aprobada']));
        $eventoABeneficio->update(request(['medida_id', 'locacion_id', 'actividades', 'fecha', 'horario_inicio', 'horario_termino']));
        return redirect(url('eventos_a_beneficio'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EventoABeneficio  $eventoABeneficio
     * @return \Illuminate\Http\Response
     */
    public function destroy($eventoABeneficioId)
    {
        $eventoABeneficio = EventoABeneficio::where('id', $eventoABeneficioId)->first();
        $eventoABeneficio->delete();
        return redirect( url('eventos_a_beneficio') );
    }
}
