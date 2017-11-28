<?php

namespace App\Http\Controllers;

use App\Comentario;
use App\EventoABeneficio;
use Illuminate\Http\Request;

class ComentarioEventoABeneficioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\EventoABeneficio  $eventoABeneficio
     * @return \Illuminate\Http\Response
     */
    public function index(EventoABeneficio $eventoABeneficio)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\EventoABeneficio  $eventoABeneficio
     * @return \Illuminate\Http\Response
     */
    public function create(EventoABeneficio $eventoABeneficio)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EventoABeneficio  $eventoABeneficio
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, EventoABeneficio $eventoABeneficio)
    {

        $this->validate(request(),[
            'descripcion' => 'required|string',
        ]);

        $request['usuario_id'] = Auth::id();
        $Request['medida_id'] = $eventoABeneficio->medida->id;

        Comentario::create(Request(['medida_id','usuario_id','descripcion']));

        return redirect( url()->previous());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EventoABeneficio  $eventoABeneficio
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function show(EventoABeneficio $eventoABeneficio, Comentario $comentario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EventoABeneficio  $eventoABeneficio
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function edit(EventoABeneficio $eventoABeneficio, Comentario $comentario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EventoABeneficio  $eventoABeneficio
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EventoABeneficio $eventoABeneficio, Comentario $comentario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EventoABeneficio  $eventoABeneficio
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function destroy(EventoABeneficio $eventoABeneficio, Comentario $comentario)
    {
        $comentario->delete();
        return redirect( url()->previous());
    }
}
