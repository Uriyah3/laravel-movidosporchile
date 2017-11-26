@extends('layouts.master-sidebarless')

@section('content')

<h1>Catástrofes identificadas</h1>
<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Tipo catastrofe</th>
				<th>Comuna</th>
				<th>Descripcion</th>
				<th>Fecha catastrofe</th>
			</tr>
		</thead>
		<tbody>
			@foreach($catastrofes as $catastrofe)
			<p>
				<tr>
					<td>{{ $catastrofe->tipo_catastrofe->nombre }}</td>
					<td>{{$catastrofe->locacion->comuna->nombre}}</td>
					<td>{{$catastrofe->descripcion}}</td>
					<td>{{$catastrofe->fecha_catastrofe}}</td>
				</tr>
			</p>
			@endforeach

		</tbody>
	</table>
</div>
{{$catastrofes->links()}}

@endsection
