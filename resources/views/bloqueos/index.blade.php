@extends('layouts.master')

@section('style')
{{ Html::style('css/bloqueo.css') }}
@section('style')
 

@section('content')

<form action="/bloqueos" method='destroy'>
	{{ csrf_field() }}
		<h1 class="titulo">Bloqueo de Usuarios</h1>

		<form action="/donacion.create">

		  <p class="selec"> Seleccione un Usuario </p> 
		  <select class="opcion" name="Usuarios">

		  	@foreach($usuarios as $usuario)

		  		<option value=>{{$usuario->nombre}}</option>

		  	@endforeach
		  	
		  <input class="boton" type="submit" value="Bloquear">

		  <br>
		</form>
		

@endsection