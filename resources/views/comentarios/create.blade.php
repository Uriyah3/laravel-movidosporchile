@extends('layouts.master')
<link rel="stylesheet" type="text/css" href="css/comentario.css">

 
@section('content')
	<form action="/comentarios" method="POST">
	{{ csrf_field() }}
	
	<h2> Publicar Comentario </h2> 
	<br />
 	<h3> Usuario:{{$user->nombre}}</h3>
	<br />

	<div class="form-group">
		<label for="descripcion">Comentario:</label>
		<textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
	</div>

	
	<div class="form-group"> 
		<button type="submit" class="btn btn-primary">Comentar</button>
	</div>
	



@endsection

