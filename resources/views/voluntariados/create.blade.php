@extends('layouts.master')

@section('style')
{{ Html::style('css/perfil.css') }}
@section('style')

@section('sidebar')
@include('layouts.sidebarUsuario')
@endsection
 
@section('content')
<h1 class="titulo">Agregar Voluntariado</h1>
<form action="/voluntariados" method="POST">
	{{ csrf_field() }}

	@include('locaciones.create')

	<div class="form-row">
		<div class="col">
			<div class="form-group{{ $errors->has('actividad_voluntariado_id') ? ' has-error' : '' }}">
				<label for="actividad_voluntariado_id">Actividad:</label>
				<select class="form-control" name="actividad_voluntariado_id" value="{{ old('actividad_voluntariado_id') }}" required>
					@foreach($actividadesVoluntariado as $actividadVoluntariado)
					<option value="{{$actividadVoluntariado->id}}">{{$actividadVoluntariado->nombre}}</option>
					@endforeach
				</select>
				@if ($errors->has('actividad_voluntariado_id'))
				<span class="help-block">
					<strong>{{ $errors->first('actividad_voluntariado_id') }}</strong>
				</span>
				@endif
			</div>
		</div>

		<div class="col">
			<div class="form-group{{ $errors->has('cantidad_voluntarios') ? ' has-error' : '' }}">
				<label for="cantidad_voluntarios">Voluntarios requeridos:</label>
				<input type="number" class="form-control" id="cantidad_voluntarios" name="cantidad_voluntarios" value="{{ old('cantidad_voluntarios') }}" required>
				@if ($errors->has('cantidad_voluntarios'))
				<span class="help-block">
					<strong>{{ $errors->first('cantidad_voluntarios') }}</strong>
				</span>
				@endif
			</div>
		</div>
	</div>

	<div class="form-row">
		<div class="col">
			<div class="form-group{{ $errors->has('fecha_inicio') ? ' has-error' : '' }}">
				<label for="fecha_inicio">Fecha de inicio:</label>
				<input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" value="{{ old('fecha_inicio') }}" required>
				@if ($errors->has('fecha_inicio'))
				<span class="help-block">
					<strong>{{ $errors->first('fecha_inicio') }}</strong>
				</span>
				@endif
			</div>
		</div>

		<div class="col">
			<div class="form-group{{ $errors->has('fecha_termino') ? ' has-error' : '' }}">
				<label for="fecha_termino">Fecha de termino:</label>
				<input type="date" class="form-control" id="fecha_termino" name="fecha_termino" value="{{ old('fecha_termino') }}" required>
				@if ($errors->has('fecha_termino'))
				<span class="help-block">
					<strong>{{ $errors->first('fecha_termino') }}</strong>
				</span>
				@endif
			</div>
		</div>
	</div>

	@include('medidas.create')

	<div class="form-group">
		<button type="submit" class="btn btn-primary">Crear voluntariado</button>
	</div>
</form>
@endsection