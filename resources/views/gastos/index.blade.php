@extends('layouts.master-sidebarless')
@section('style')
{{ Html::style('css/perfil.css') }}
@endsection

@section('content')
	<br />
	<bt />
	<h1 class="titulo">Gastos Generados</h1>

	<p>
		Para mantener la transparencia con la nación, se muestra en detalle los gastos generados con los fondos recaudados, siendo estas inversiones destinadas a eventos de beneficio con el fin de incrementar el monto canalizado.
	</p>
	<div class="table-responsive">

  <table class="table table-striped">
  	<thead>
   		<tr>
				<th>Usuario</th>
				<th>Fecha</th>
				<th>Monto</th>
				<th>Propósito</th>
		</tr>
		</thead>
		<tbody>
			@foreach($gastos as $gasto)
			<p>
				<tr>
					<td>{{$gasto->usuario->nombre}}</td>
					<td>{{$gasto->fecha}}</td>
					<td>{{$gasto->monto}}</td>
					<td>{{$gasto->proposito}}</td>
				</tr>
			</p>
			@endforeach

		</tbody>
	</table>
</div>
{{$gastos->links()}}

@endsection