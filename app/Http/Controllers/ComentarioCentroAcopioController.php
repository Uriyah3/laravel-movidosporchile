<?php

namespace App\Http\Controllers;

use App\Comentario;
use App\CentroAcopio;
use Illuminate\Http\Request;

class ComentarioCentroAcopioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\CentroAcopio  $centroAcopio
     * @return \Illuminate\Http\Response
     */
    public function index(CentroAcopio $centroAcopio)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\CentroAcopio  $centroAcopio
     * @return \Illuminate\Http\Response
     */
    public function create(CentroAcopio $centroAcopio)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CentroAcopio  $centroAcopio
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, CentroAcopio $centroAcopio)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CentroAcopio  $centroAcopio
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function show(CentroAcopio $centroAcopio, Comentario $comentario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CentroAcopio  $centroAcopio
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function edit(CentroAcopio $centroAcopio, Comentario $comentario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CentroAcopio  $centroAcopio
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CentroAcopio $centroAcopio, Comentario $comentario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CentroAcopio  $centroAcopio
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function destroy(CentroAcopio $centroAcopio, Comentario $comentario)
    {
        //
    }
}
