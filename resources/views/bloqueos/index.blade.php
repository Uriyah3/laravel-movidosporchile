@extends('layouts.master')
<link rel="stylesheet" type="text/css" href="css/perfil.css"> 
 

@section('content')
<form action="/bloqueos" method="POST">
	{{ csrf_field() }}	
		<h1 class="titulo">Bloque de usuarios</h1>
		<form action="/donacion.create">

		  Seleccione un usuario:<br>
		  <select name="Usuarios">

		  	@foreach($usuarios as $usuario)

		  		<option value=>{{$usuario->nombre}}</option>

		  	@endforeach
		  	
		  <input type="submit" value="Bloquear">

		  <br>
		</form>
		

@endsection