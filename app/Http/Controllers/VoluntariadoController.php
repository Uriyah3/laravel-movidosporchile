<?php

namespace App\Http\Controllers;

use App\Voluntariado;
use App\Medida;
use Illuminate\Http\Request;

class VoluntariadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voluntariados = Voluntariado::aprobado()->with('medida', 'locacion.comuna', 'actividad_voluntariado')->withCount('voluntario')->orderBy('created_at', 'desc')->simplePaginate(10);

        return view('voluntariados.index', compact('voluntariados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('voluntariados.create');
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
            'descripcion' => 'required|string',
            'actividad_voluntariado_id' => 'required',
            'fecha_inicio' => 'required|date',
            'fecha_termino' => 'required|date|after:fecha_inicio',
            'cantidad_voluntarios' => 'required'
        ]);

        $user = Auth::user();
        $request['locacion_id'] = factory(Locacion::class)->create(['comuna_id' => $request['comuna_id']])->id;
        $request['usuario_id'] = $user['id'];

        $request['medida_id'] = Medida::create(request(['usuario_id', 'objetivos', 'descripcion']))->id;
        Voluntariado::create(request(['medida_id', 'locacion_id', 'actividad_voluntariado_id', 'fecha_inicio', 'fecha_termino', 'cantidad_voluntarios']));

        return redirect( url('voluntariados') );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Voluntariado  $voluntariado
     * @return \Illuminate\Http\Response
     */
    public function show(Voluntariado $voluntariado)
    {
        $medida = $voluntariado->medida()->first();
        return view('voluntariados.show', compact('voluntariado', 'medida'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Voluntariado  $voluntariado
     * @return \Illuminate\Http\Response
     */
    public function edit(Voluntariado $voluntariado)
    {
        return view('voluntariados.edit', compact('voluntariado'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Voluntariado  $voluntariado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voluntariado $voluntariado)
    {
        //
    }
}