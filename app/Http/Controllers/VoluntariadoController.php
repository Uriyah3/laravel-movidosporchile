<?php

namespace App\Http\Controllers;

use Auth;
use App\Locacion;
use App\Voluntariado;
use App\Medida;
use App\Region;
use App\ActividadVoluntariado;
use Illuminate\Http\Request;
use App\Notifications\MedidaPublicada;

class VoluntariadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check() && Auth::user()->rol->nombre == "Gobierno") {
            $voluntariados = Voluntariado::with('medida', 'locacion.comuna', 'actividad_voluntariado')->withCount('voluntario')->orderBy('fecha_inicio', 'desc')->simplePaginate(10);
        } else {
            $voluntariados = Voluntariado::aprobado()->with('medida', 'locacion.comuna', 'actividad_voluntariado')->withCount('voluntario')->orderBy('fecha_inicio', 'desc')->simplePaginate(10);
        }

        return view('voluntariados.index', compact('voluntariados'));
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
            'actividad_voluntariado_id' => 'required',
            'fecha_inicio' => 'required|date',
            'fecha_termino' => 'required|date|after:fecha_inicio',
            'cantidad_voluntarios' => 'required'
        ]);

        $user = Auth::user();
        $request['locacion_id'] = factory(Locacion::class)->create(['comuna_id' => $request['comuna_id']])->id;
        $request['usuario_id'] = $user['id'];

        $request['medida_id'] = Medida::create(request(['usuario_id', 'objetivos', 'descripcion']))->id;
        $voluntariado = Voluntariado::create(request(['medida_id', 'locacion_id', 'actividad_voluntariado_id', 'fecha_inicio', 'fecha_termino', 'cantidad_voluntarios']));

        $voluntariado->notify(new MedidaPublicada());

        return redirect( url('voluntariados') );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Voluntariado ID $voluntariadoId
     * @return \Illuminate\Http\Response
     */
    public function show($voluntariadoId)
    {
        $voluntariado = Voluntariado::where('id', $voluntariadoId)->withCount('voluntario')->first();
        return view('voluntariados.show', compact('voluntariado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regiones = Region::all();
        $actividadesVoluntariado = ActividadVoluntariado::all();

        return view('voluntariados.create', compact('regiones', 'actividadesVoluntariado'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Voluntariado  $voluntariado
     * @return \Illuminate\Http\Response
     */
    public function edit(Voluntariado $voluntariado)
    {
        $regiones = Region::all();
        $actividadesVoluntariado = ActividadVoluntariado::all();

        return view('voluntariados.edit', compact('voluntariado', 'regiones', 'actividadesVoluntariado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Voluntariado  $voluntariado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voluntariado $voluntariado)
    {
        $voluntariado->locacion->update(request(['comuna_id']));
        $voluntariado->medida->update(request(['usuario_id', 'objetivos', 'descripcion', 'aprobada']));
        $voluntariado->update(request(['medida_id', 'locacion_id', 'actividad_voluntariado_id', 'fecha_inicio', 'fecha_termino', 'cantidad_voluntarios']));
        return redirect(url('voluntariados'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Voluntariado  $voluntariado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voluntariado $voluntariado)
    {
        $voluntariado->delete();
        return redirect( url('voluntariados') );
    }
}
