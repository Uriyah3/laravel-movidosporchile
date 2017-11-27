@extends('layouts.master-sidebarless')


@section('style')
{{ Html::style('css/catastrofe.css') }}
@section('style')


@section('content')

<h1 class="titulo">Catástrofes Naturales</h1> 

<div class="def">
	<h2 class="subtitulo">¿Qué es una Catástrofe Natural?</h2>
	<br />
	<p>Una catástrofe natural es cualquier suceso inesperado causado por la naturaleza, cuyas manifestaciones en forma de daños materiales y/o personales son de magnitudes enormes, alterando el orden regular de las cosas. Estos desastres naturales pueden ser:<br/ ><!--
		<ul>
		  <li>Inundación.</li>
		  <li>Terremoto.</li>
		  <li>Tsunamis.</li>
		  <li>Erupciones Volcánicas.</li>
		  <li>Incendios Forestales.</li>
		  <li>Movimientos de masa: avalancha, corrimiento de tierra.</li>
		  <li>Fenómenos atmosféricos: ola de calor, granizo, sequía, huracán, tormenta, ventisca, tormenta eléctrica o de arena, tornado.</li>
		</ul>-->
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
<br />



<h2 class="subtitulo">Últimas Catástrofes Identificadas</h2>

</div>

<div class="table-responsive">

  <table class="table table-striped">
  	<thead>
   		<tr>
				<th>Tipo Catástrofe</th>

				<th>Comuna</th>
				<th>Descripción</th>
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
