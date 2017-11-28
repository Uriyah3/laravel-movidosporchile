@extends('layouts.master')

@section('style')
{{ Html::style('css/comentario.css') }}
@section('style')
 

 
@section('content')
	<form action="/comentarios" method="POST">
	{{ csrf_field() }}
	
	<h2 class="subtitulo"> Publicar Comentario </h2> 
	<br />
	<a target="_blank" href="http://movidosporchile.dev/actividades"> {{$user->nombre}} </a>
	<br />
	<!--
 	<h3> Usuario: {{$user->nombre}}</h3>
	<br />-->

	<div class="form-group">
		<textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="¿Qué opinas de la medida?"></textarea>
	</div>

	
	<div class="form-group"> 
		<button class="boton" type="submit" class="btn btn-primary">Comentar</button>
	</div>
	



@endsection

