<?php

namespace App\Http\Controllers;

use App\Voluntario;
use App\Voluntariado;
use Illuminate\Http\Request;

class VoluntarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Voluntariado  $voluntariado
     * @return \Illuminate\Http\Response
     */
    public function index(Voluntariado $voluntariado)
    {
       $voluntarios = Voluntario::with('usuario','voluntariado')->orderBy('created_at','desc')->paginate(7);

       return view('voluntarios.index',compact('voluntarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Voluntariado  $voluntariado
     * @return \Illuminate\Http\Response
     */
    public function create(Voluntariado $voluntariado)
    {
        $voluntariado = Voluntariado::all();

        return view('voluntario.create',compact('voluntariado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Voluntariado  $voluntariado
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Voluntariado $voluntariado)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Voluntariado  $voluntariado
     * @param  \App\Voluntario  $voluntario
     * @return \Illuminate\Http\Response
     */
    public function show(Voluntariado $voluntariado, Voluntario $voluntario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Voluntariado  $voluntariado
     * @param  \App\Voluntario  $voluntario
     * @return \Illuminate\Http\Response
     */
    public function edit(Voluntariado $voluntariado, Voluntario $voluntario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Voluntariado  $voluntariado
     * @param  \App\Voluntario  $voluntario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voluntariado $voluntariado, Voluntario $voluntario)
    {
        //
    } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Voluntariado  $voluntariado
     * @param  \App\Voluntario  $voluntario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voluntariado $voluntariado, Voluntario $voluntario)
    {
         $voluntariado->delete();
         return redirect( url('voluntario'));

    }
}
