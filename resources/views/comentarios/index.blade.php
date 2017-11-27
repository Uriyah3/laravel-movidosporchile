@extends('layouts.master') 

<link rel="stylesheet" type="text/css" href="css/comentario.css">

@section('content')


	<h2>Comentarios medida </h2>
			
		<div class="table-responsive">

  <table class="table table-striped">
  	<thead>
   		<tr>
				<th>Usuario</th>
				<th>Comentario</th>
				<th>Fecha comentario</th>
				
		</tr>
		</thead>
		<tbody>
			@foreach($comentarios as $comentario)
			<p>
				<tr>
					<td>{{$comentario->usuario->nombre}}</td>
					<td>{{$comentario->descripcion}}</td>
					<td>{{$comentario->created_at}}</td>
				</tr>
			</p>
			@endforeach

		</tbody>
	</table>
</div>
{{$comentarios->links()}}

@endsection