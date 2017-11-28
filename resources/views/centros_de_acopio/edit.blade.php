@extends('layouts.master')

@section('style')
{{ Html::style('css/perfil.css') }}
@endsection

@section('sidebar')
@include('layouts.sidebarUsuario')
@endsection

@section('content')
<h1 class="titulo">Editar Centro de Acopio</h1>
<form action="{{url('centros_de_acopio', $centroAcopio->id)}}" method="POST">
	{{ csrf_field() }}
    {{ method_field('PATCH') }}

	@include('locaciones.edit', ['locacion' => $centroAcopio->locacion])

	<div class="form-row">
		<div class="col">
			<div class="form-group{{ $errors->has('estado_id') ? ' has-error' : '' }}">
				<label for="estado_id">Estado:</label>
				<select class="form-control" name="estado_id" value="{{ old('estado_id', $centroAcopio->estado_id) }}" required>
					@foreach($estados as $estado)
					<option value="{{$estado->id}}">{{$estado->nombre}}</option>
					@endforeach
				</select>

				@if ($errors->has('estado_id'))
				<span class="help-block">
					<strong>{{ $errors->first('estado_id') }}</strong>
				</span>
				@endif
			</div>
		</div>
		<div class="col">
			<div class="form-group{{ $errors->has('fecha_inicio') ? ' has-error' : '' }}">
				<label for="fecha_inicio">Fecha de inicio:</label>
				<input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" value="{{ old('fecha_inicio', $centroAcopio->fecha_inicio) }}" required>

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
				<input type="date" class="form-control" id="fecha_termino" name="fecha_termino" value="{{ old('fecha_termino', $centroAcopio->fecha_termino) }}" required>

				@if ($errors->has('fecha_termino'))
				<span class="help-block">
					<strong>{{ $errors->first('fecha_termino') }}</strong>
				</span>
				@endif
			</div>
		</div>
	</div>

	@include('medidas.edit', ['medida' => $centroAcopio->medida])

	<div class="form-group">
		<button type="submit" class="btn btn-primary">Editar Centro de acopio</button>
	</div>
</form>
@endsection