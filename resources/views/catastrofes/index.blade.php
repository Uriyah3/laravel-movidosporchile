@extends('layouts.master-sidebarless')
<link rel="stylesheet" type="text/css" href="css/catastrofe.css"> 

@section('content')

<h1>Catástrofes Naturales</h1>

<div class="def">
	<h2>¿Qué es una Catástrofe Natural?</h2>
	<br />
	<p>Una catástrofe natural es cualquier suceso inesperado causado por la naturaleza, cuyas manifestaciones en forma de daños materiales y/o personales son de magnitudes enormes, alterando el orden regular de las cosas. Estos desastres naturales pueden ser:<br/ >
	- Inundación.<br/ >
	- Terremoto.<br/ >
	- Tsunamis. <br/ >
	- Erupciones volcánicas. <br/ >
	- Incendios Forestales.<br/ >
	- Movimientos de masa: avalancha, corrimiento de tierra.<br/ >
	- Fenómenos atmosféricos: ola de calor, granizo, sequía, huracán, tormenta, ventisca, tormenta eléctrica o de arena, tornado. <br/ >
	- Fenómenos espaciales: impactos de origen cósmico, tormenta solar. <br/ >
	- Desastres biológicos: enfermedad. 
	</p>
</div>

<div>
	<img class="im" src="imagenes/catastrofes3.jpg">
</div>

<br />
<br />
<br />



<h2>Últimas Catástrofes Identificadas</h2>

</div>

<div class="table-responsive">
  <table class="table table-striped">
  	<thead>
   		<tr>
				<th>Tipo Catástrofe</th>
				<th>Comuna</th>
				<th>Descripcion</th>
				<th>Fecha Catástrofe</th>
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
