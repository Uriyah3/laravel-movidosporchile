@extends('layouts.master')

@section('sidebar')
@include('layouts.sidebarUsuario')
@endsection

@section('content')
<h2>Voluntariado</h2>
<div class="table-responsive">
	<table class="table table-striped">
		<tbody>
			<tr>
				<td class="font-weight-bold">Descripcion</td>
				<td>{{ $voluntariado->medida->descripcion }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Objetivos</td>
				<td>{{ $voluntariado->medida->objetivos }}</td>
			</tr>
			@if(Auth::check() && Auth::getUser()->rol != 'Usuario')
			<tr>
				<td class="font-weight-bold">Medida Aprobada</td>
				<td>{{ ($voluntariado->medida->aprobada == false) ? 'No' : 'Si' }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Creador</td>
				<td>{{ $voluntariado->medida->usuario->nombre }}</td>
			</tr>
			@endif
			<tr>
				<td class="font-weight-bold">Comuna</td>
				<td>{{ $voluntariado->locacion->comuna->nombre }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Actividad</td>
				<td>{{ $voluntariado->actividad_voluntariado->nombre }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Fecha Inicio</td>
				<td>{{ $voluntariado->fecha_inicio }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Fecha termino</td>
				<td>{{ $voluntariado->fecha_termino }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Meta voluntarios</td>
				<td>{{ $voluntariado->cantidad_voluntarios }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Voluntarios inscritos</td>
				<td>{{ $voluntariado->voluntario_count }}</td>
			</tr>
			@if(Auth::check() && Auth::user()->rol != 'Usuario')
			<tr>
				<td class="font-weight-bold">Fecha Creación</td>
				<td>{{ $voluntariado->created_at }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Fecha última modificación</td>
				<td>{{ $voluntariado->modified_at }}</td>
			</tr>
			@endif
		</tbody>
	</table>
</div>
@endsection