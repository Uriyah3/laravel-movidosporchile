@extends('layouts.master')

@section('style')
{{ Html::style('css/perfil.css') }}
@section('style')

@section('sidebar')
@include('layouts.sidebarUsuario')
@endsection

@section('content')
	

<h2 class="subtitulo">Voluntarios</h2>



<div class="table-responsive"> 

  <table class="table table-striped">
  	<thead>
   		<tr>
				<th>Usuario</th>
				<th>Voluntariado</th>
				<th>Fecha inicio</th>
				<th>¿Finalizado?</th>
		</tr>
		</thead>
		<tbody>
			@foreach($voluntarios as $voluntario)
			
				<tr>
					<td>{{ $voluntario->usuario->nombre }}</td>
					<td>{{$voluntario->voluntariado->actividad_voluntariado->nombre}}</td>
					<td>{{$voluntario->created_at}}</td>
					<td>{{$voluntario->finalizado==true ? "Verdadero" : "Falso"}}</td>
				</tr>
			
			@endforeach

		</tbody>
	</table>
</div>
{{$voluntarios->links()}}

@endsection
