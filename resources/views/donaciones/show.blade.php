@extends('layouts.master')

@section('style')
{{ Html::style('css/perfil.css') }}
@endsection

@section('sidebar')
@include('layouts.sidebarUsuario')
@endsection

@section('content')
<h2>Donación</h2>
<div class="table-responsive">
	<table class="table table-striped">
		<tbody>
			<tr>
				<td class="font-weight-bold">Descripción</td>
				<td>{{ $donacion->medida->descripcion }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Objetivos</td>
				<td>{{ $donacion->medida->objetivos }}</td>
			</tr>
			@if(Auth::check() && Auth::getUser()->rol != 'Usuario')
			<tr>
				<td class="font-weight-bold">Medida Aprobada</td>
				<td>{{ ($donacion->medida->aprobada == false) ? 'No' : 'Si' }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Creador</td>
				<td>{{ $donacion->medida->usuario->nombre }}</td>
			</tr>
			@endif
			<tr>
				<td class="font-weight-bold">Titular</td>
				<td>{{ $donacion->titular }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Rut destinatario</td>
				<td>{{ $donacion->rut_destinatario }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Nombre banco</td>
				<td>{{ $donacion->nombre_banco }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Tipo cuenta</td>
				<td>{{ $donacion->tipo_cuenta }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Cuenta</td>
				<td>{{ $donacion->cuenta }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Fecha inicio</td>
				<td>{{ $donacion->fecha_inicio }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Fecha termino</td>
				<td>{{ $donacion->fecha_termino }}</td>
			</tr>
			@if(Auth::check() && Auth::user()->rol->nombre != 'Usuario')
			<tr>
				<td class="font-weight-bold">Fecha Creación</td>
				<td>{{ $donacion->created_at }}</td>
			</tr>
			<tr>
				<td class="font-weight-bold">Fecha última modificación</td>
				<td>{{ $donacion->updated_at }}</td>
			</tr>
			@endif
		</tbody>
	</table>
</div>

@if($donacion->deposito->count() > 0)
<h3>Depositos realizados</h3>
<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Donante</th>
				<th>Monto</th>
				<th>Fecha donación</th>
			</tr>
		</thead>
		<tbody>
			@foreach($donacion->deposito->sortByDesc('fecha') as $deposito)
			<tr>
				<td class="text-center">{{$deposito->usuario->nombre}}</td>
				<td class="text-center">{{$deposito->monto}}</td>
				<td class="text-center">{{$deposito->fecha}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endif

<br />

@includeWhen($donacion->medida->comentario->count() > 0, 'comentarios.index', ['comentarios' => paginate($donacion->medida->comentario->sortByDesc('created_at'))->withPath("/donaciones/{$donacion->id}")])

@endsection