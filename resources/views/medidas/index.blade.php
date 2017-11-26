@extends('layouts.master')

@section('sidebar')
  @include('layouts.sidebarUsuario')
@endsection


@section('content')
<h2>Medidas de ayuda</h2>
<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Id</th>
				<th>Objetivos</th>
				<th>Descripcion</th>
			</tr>
		</thead>
		<tbody>
			@foreach($medidas as $medida)
			<p>
				<tr>
					<td>{{ $medida->id }}</td>
					<td>{{ $medida->objetivos }}</td>
					<td>{{ $medida->descripcion }}</td>
				</tr>
			</p>
			@endforeach

		</tbody>
	</table>
</div>
{{ $medidas->links() }}
@endsection