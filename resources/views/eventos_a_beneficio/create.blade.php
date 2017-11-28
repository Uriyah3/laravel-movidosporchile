@extends('layouts.master')

@section('style')
{{ Html::style('css/perfil.css') }}
@endsection

@section('sidebar')
@include('layouts.sidebarUsuario')
@endsection

@section('content')
<h1 class="titulo">Agregar Evento A Beneficio</h1>
<form action="/eventos_a_beneficio" method="POST">
	{{ csrf_field() }}

	@include('locaciones.create')

	<div class="form-row">
		<div class="col">
			<div class="form-group{{ $errors->has('fecha') ? ' has-error' : '' }}">
				<label for="fecha">Fecha:</label>
				<input type="date" class="form-control" id="fecha" name="fecha" value="{{ old('fecha') }}" required>
				@if ($errors->has('fecha'))
				<span class="help-block">
					<strong>{{ $errors->first('fecha') }}</strong>
				</span>
				@endif
			</div>
		</div>

		<div class="col">
			<div class="form-group{{ $errors->has('horario_inicio') ? ' has-error' : '' }}">
				<label for="horario_inicio">Horario de inicio:</label>
				<input type="time" class="form-control" id="horario_inicio" name="horario_inicio" value="{{ old('horario_inicio') }}" required>
				@if ($errors->has('horario_inicio'))
				<span class="help-block">
					<strong>{{ $errors->first('horario_inicio') }}</strong>
				</span>
				@endif
			</div>
		</div>

		<div class="col">
			<div class="form-group{{ $errors->has('horario_termino') ? ' has-error' : '' }}">
				<label for="horario_termino">Horario de inicio:</label>
				<input type="time" class="form-control" id="horario_termino" name="horario_termino" value="{{ old('horario_termino') }}" required>
				@if ($errors->has('horario_termino'))
				<span class="help-block">
					<strong>{{ $errors->first('horario_termino') }}</strong>
				</span>
				@endif
			</div>
		</div>
	</div>

	<div class="form-group{{ $errors->has('actividades') ? ' has-error' : '' }}">
		<label for="actividades">Actividades:</label>
		<textarea class="form-control" id="actividades" name="actividades" rows="2" value="{{ old('actividades') }}" required></textarea>
		@if ($errors->has('actividades'))
		<span class="help-block">
			<strong>{{ $errors->first('actividades') }}</strong>
		</span>
		@endif
	</div>

	@include('medidas.create')

	<div class="form-group">
		<button type="submit" class="btn btn-primary">Crear Evento a beneficio</button>
	</div>
</form>
@endsection