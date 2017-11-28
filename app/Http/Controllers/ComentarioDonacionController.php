<?php

namespace App\Http\Controllers;

use App\Comentario;
use App\Donacion;
use Illuminate\Http\Request;

class ComentarioDonacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Donacion  $donacion
     * @return \Illuminate\Http\Response
     */
    public function index(Donacion $donacion)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Donacion  $donacion
     * @return \Illuminate\Http\Response
     */
    public function create(Donacion $donacion)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Donacion  $donacion
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Donacion $donacion)
    {
         $this->validate(request(),[
            'descripcion' => 'required|string',
        ]);

        $request['usuario_id'] = Auth::id();
        $Request['medida_id'] = $donacion->medida->id;

        Comentario::create(Request(['medida_id','usuario_id','descripcion']));

        return redirect( url()->previous());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Donacion  $donacion
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function show(Donacion $donacion, Comentario $comentario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Donacion  $donacion
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function edit(Donacion $donacion, Comentario $comentario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Donacion  $donacion
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donacion $donacion, Comentario $comentario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Donacion  $donacion
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donacion $donacion, Comentario $comentario)
    {
        $comentario->delete();
        return redirect( url()->previous());
    }
}
