@extends('layouts.master')

@section('style')
{{ Html::style('css/perfil.css') }}
@endsection

@section('sidebar')
@include('layouts.sidebarUsuario')
@endsection

@section('content')
<h1 class="titulo">Editar Donación</h1>
<form action="{{url('donaciones', $donacion->id)}}" method="POST">
	{{ csrf_field() }}
    {{ method_field('PATCH') }}

	<div class="form-row">
		<div class="col">
			<div class="form-group{{ $errors->has('titular') ? ' has-error' : '' }}">
				<label for="titular">Titular:</label>
				<input type="text" class="form-control" id="titular" name="titular" value="{{ old('titular', $donacion->titular) }}" required>
				@if ($errors->has('titular'))
				<span class="help-block">
					<strong>{{ $errors->first('titular') }}</strong>
				</span>
				@endif
			</div>
		</div>

		<div class="col">
			<div class="form-group{{ $errors->has('rut_destinatario') ? ' has-error' : '' }}">
				<label for="rut_destinatario">Rut destinatario:</label>
				<input type="text" class="form-control" id="rut_destinatario" name="rut_destinatario" value="{{ old('rut_destinatario', $donacion->rut_destinatario) }}" required>
				@if ($errors->has('rut_destinatario'))
				<span class="help-block">
					<strong>{{ $errors->first('rut_destinatario') }}</strong>
				</span>
				@endif
			</div>
		</div>
	</div>

	<div class="form-row">
		<div class="col">
			<div class="form-group{{ $errors->has('nombre_banco') ? ' has-error' : '' }}">
				<label for="nombre_banco">Nombre Banco:</label>
				<input type="text" class="form-control" id="nombre_banco" name="nombre_banco" value="{{ old('nombre_banco', $donacion->nombre_banco) }}" required>
				@if ($errors->has('nombre_banco'))
				<span class="help-block">
					<strong>{{ $errors->first('nombre_banco') }}</strong>
				</span>
				@endif
			</div>
		</div>

		<div class="col">
			<div class="form-group{{ $errors->has('tipo_cuenta') ? ' has-error' : '' }}">
				<label for="tipo_cuenta">Tipo Cta.:</label>
				<input type="text" class="form-control" id="tipo_cuenta" name="tipo_cuenta" value="{{ old('tipo_cuenta', $donacion->tipo_cuenta) }}" required>
				@if ($errors->has('tipo_cuenta'))
				<span class="help-block">
					<strong>{{ $errors->first('tipo_cuenta') }}</strong>
				</span>
				@endif
			</div>
		</div>

		<div class="col">
			<div class="form-group{{ $errors->has('cuenta') ? ' has-error' : '' }}">
				<label for="cuenta">Número de cuenta:</label>
				<input type="text" class="form-control" id="cuenta" name="cuenta" value="{{ old('cuenta', $donacion->cuenta) }}" required>
				@if ($errors->has('cuenta'))
				<span class="help-block">
					<strong>{{ $errors->first('cuenta') }}</strong>
				</span>
				@endif
			</div>
		</div>
	</div>

	<div class="form-row">
		<div class="col">
			<div class="form-group{{ $errors->has('fecha_inicio') ? ' has-error' : '' }}">
				<label for="fecha_inicio">Fecha de inicio:</label>
				<input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" value="{{ old('fecha_inicio', $donacion->fecha_inicio) }}" required>
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
				<input type="date" class="form-control" id="fecha_termino" name="fecha_termino" value="{{ old('fecha_termino', $donacion->fecha_termino) }}" required>
				@if ($errors->has('fecha_termino'))
				<span class="help-block">
					<strong>{{ $errors->first('fecha_termino') }}</strong>
				</span>
				@endif
			</div>
		</div>
	</div>

	@include('medidas.edit', ['medida' => $donacion->medida])

	<div class="form-group">
		<button type="submit" class="btn btn-primary">Editar Donación</button>
	</div>
</form>
@endsection