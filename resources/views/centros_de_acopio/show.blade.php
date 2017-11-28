@extends('layouts.master')

@section('style')
{{ Html::style('css/perfil.css') }}
@endsection

@section('sidebar')
@include('layouts.sidebarUsuario')
@endsection

@section('content')
<h2>Centro de Acopio</h2>
<div class="table-responsive">
	<table class="table table-striped">
		<tbody>
			<tr>
				<td class="font-weight-bold">Descripción</td>
				<td>{{ $centroAcopio->medida->descripcion }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Objetivos</td>
				<td>{{ $centroAcopio->medida->objetivos }}</td>
			</tr>
			@if(Auth::check() && Auth::getUser()->rol != 'Usuario')
			<tr>
				<td class="font-weight-bold">Medida Aprobada</td>
				<td>{{ ($centroAcopio->medida->aprobada == false) ? 'No' : 'Si' }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Creador</td>
				<td>{{ $centroAcopio->medida->usuario->nombre }}</td>
			</tr>
			@endif
			<tr>
				<td class="font-weight-bold">Comuna</td>
				<td>{{ $centroAcopio->locacion->comuna->nombre }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Estado</td>
				<td>{{ $centroAcopio->estado->nombre }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Fecha Inicio</td>
				<td>{{ $centroAcopio->fecha_inicio }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Fecha termino</td>
				<td>{{ $centroAcopio->fecha_termino }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Bienes donados</td>
				<td>{{ $centroAcopio->bien_count }}</td>
			</tr>
			@if(Auth::check() && Auth::user()->rol->nombre != 'Usuario')
			<tr>
				<td class="font-weight-bold">Fecha Creación</td>
				<td>{{ $centroAcopio->created_at }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Fecha última modificación</td>
				<td>{{ $centroAcopio->updated_at }}</td>
			</tr>
			@endif
		</tbody>
	</table>
</div>

@if($centroAcopio->bien_count > 0)
<h3>Bienes donados</h3>
<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Donador</th>
				<th>Bien</th>
				<th>Cantidad</th>
				<th>Medición</th>
			</tr>
		</thead>
		<tbody>
			@foreach($centroAcopio->bien as $bien)
			<tr>
				<td class="text-center">{{$bien->usuario->nombre}}</td>
				<td class="text-center">{{$bien->tipo}}</td>
				<td class="text-center">{{$bien->cantidad}}</td>
				<td class="text-center">{{$bien->medicion->nombre}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endif

<br />

@includeWhen($centroAcopio->medida->comentario->count() > 0, 'comentarios.index', ['comentarios' => paginate($centroAcopio->medida->comentario->sortByDesc('created_at'))->withPath("/voluntariados/{$centroAcopio->id}")])

@endsection