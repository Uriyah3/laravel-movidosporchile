@extends('layouts.master-sidebarless')

@section('style')
{{ Html::style('css/perfil.css') }}
@endsection

@section('content')
<h1 class="titulo">Añadir catástrofe</h1>
<form action="/catastrofes" method="POST">
	{{ csrf_field() }}
	@include('locaciones.create')

	<div class="form-group">
		<label for="tipo_catastrofe_id">Tipo de Catástrofe:</label>
		<select class="form-control" name="tipo_catastrofe_id">
			@foreach($tipoCatastrofes as $tipoCatastrofe)
			<option value="{{$tipoCatastrofe->id}}">{{$tipoCatastrofe->nombre}}</option>
			@endforeach
		</select>
	</div>

	<div class="form-group">
		<label for="fecha_catastrofe">Fecha:</label>
		<input type="datetime-local" class="form-control" id="fecha_catastrofe" name="fecha_catastrofe">
	</div>

	<div class="form-group">
		<label for="descripcion">Descripción:</label>
		<textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-primary">Añadir catástrofe</button>
	</div>

</form>
@endsection 
