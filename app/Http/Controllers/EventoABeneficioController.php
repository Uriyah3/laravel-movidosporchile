<?php

namespace App\Http\Controllers;

use App\EventoABeneficio;
use Illuminate\Http\Request;

class EventoABeneficioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventoAbeneficios = EventoABeneficio::aprobado()->simplePaginate(10);

        return view('eventos_a_beneficio.index', compact('eventoAbeneficios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EventoABeneficio  $eventoABeneficio
     * @return \Illuminate\Http\Response
     */
    public function show(EventoABeneficio $eventoABeneficio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EventoABeneficio  $eventoABeneficio
     * @return \Illuminate\Http\Response
     */
    public function edit(EventoABeneficio $eventoABeneficio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EventoABeneficio  $eventoABeneficio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EventoABeneficio $eventoABeneficio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EventoABeneficio  $eventoABeneficio
     * @return \Illuminate\Http\Response
     */
    public function destroy(EventoABeneficio $eventoABeneficio)
    {
        //
    }
}
