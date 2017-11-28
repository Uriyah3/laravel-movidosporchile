@extends('layouts.master-sidebarless')

@section('style')
{{ Html::style('css/catastrofe.css') }}
@section('style')

@section('content')

<h1 class="titulo">Catástrofes Naturales</h1>

<div class="def">
	<h2 class="subtitulo">¿Qué es una Catástrofe Natural?</h2>
	<br />
	<p>Una catástrofe natural es cualquier suceso inesperado causado por la naturaleza, cuyas manifestaciones en forma de daños materiales y/o personales son de magnitudes enormes, alterando el orden regular de las cosas. Estos desastres naturales pueden ser:<br/ >
	
		<ol id="lista2">
		    <li>Inundación.</li>
		    <li>Terremoto.</li>
		    <li>Tsunamis.</li>
		    <li>Erupciones Volcánicas.</li>
		    <li>Incendios Forestales.</li>
		    <li>Movimientos de Masa.
		       <ol>
		          <li>Avalancha.</li>
		          <li>Corrimiento de Tierra</li>
		       </ol>
		    </li>
		    <li>Fenómenos Atmosféricos
		    	<ol>
		          <li>Ola de Calor.</li>
		          <li>Granizo.</li>
		          <li>Sequía.</li>
		          <li>Huracan.</li>
		          <li>Tormenta.</li>
		          <li>Ventisca.</li>
		          <li>Tormenta Eléctrica.</li>
		          <li>Tormenta de Arena.</li>
		          <li>Tornado.</li>
		       </ol>
		    </li>
		</ol>
	</p>
</div>

<div>
	<img class="im" src="imagenes/catastrofes3.jpg">
</div>

<br />
<br />

<div class="rotar"> 
		<p class="emerg"><br />Teléfonos de <br />Emergencia<br /> </p>

		<p class="emergtex">
			130	CONAF: Incendios forestales.<br />
			131	SAMU: Ambulancia.<br />
			132	Bomberos.<br />
			133	Carabineros: Emergencias policiales.<br />
			134	Policía de investigaciones: Emergencias policiales.<br />
			136	Cuerpo de socorro andino.<br />
			137	Búsqueda y salvamento marítimo.<br />
			138	Rescate aéreo.<br />
			139	Informaciones policiales.<br />

		</p>
</div>

<div class="imemerg">
	<img  src="imagenes/emergencia.png">
</div>


<h2 class="subtitulo">Últimas Catástrofes Identificadas</h2>

<div class="table-responsive">

  <table class="table table-striped">
  	<thead>
   		<tr>
				<th>Tipo Catástrofe</th>

				<th>Comuna</th>
				<th>Descripción</th>
				<th width="17%">Fecha Catástrofe</th>
		</tr>
		</thead>
		<tbody>
			@foreach($catastrofes as $catastrofe)
				<tr>
					<td>{{ $catastrofe->tipo_catastrofe->nombre }}</td>
					<td>{{$catastrofe->locacion->comuna->nombre}}</td>
					<td>{{$catastrofe->descripcion}}</td>
					<td>{{$catastrofe->fecha_catastrofe}}</td>
				</tr>
			@endforeach

		</tbody>
	</table>
</div>
{{$catastrofes->links()}}

@endsection
