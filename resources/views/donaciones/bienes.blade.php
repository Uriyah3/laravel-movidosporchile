@extends('layouts.master')

 @section('sidebar')
    <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
  <ul class="nav nav-pills flex-column">
    <li class="nav-item">
      <a class="nav-link active" href="#">Elementos<span class="sr-only">(current)</span></a>
    </li>

  <ul class="nav nav-pills flex-column">
    <li class="nav-item">
      <a class="nav-link" href="voluntarios">Voluntariado</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="donaciones">Donaciones Dinero</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="donacionesbienes">Donaciones Biens</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="evento">Eventos a beneficio</a>
    </li>
  </ul>
    </li>
  </ul>
</nav>
@endsection

@section('content')
	<head>
		<title>Donaciones MovidosxChile</title>
	</head>
	<body>
		<h1>Donaciones</h1>
		<form action="/donacion.create">
		  ¿Que desea donar?:<br>
		  <select name="Catastrofes">
		    <option value="1">Muebles</option>
		    <option value="2">Alimento</option>
		    <option value="3">Ropa</option>
		  </select><br /><br />
		  ¿ha que sede dese enviara?:<br>
		  <select name="Catastrofes">
		    <option value="1">sede 1</option>
		    <option value="2">sede 2</option>
		    <option value="3">sede 3</option>
		  </select><br /><br />
		  <input type="submit">
		</form>
		<br>
		
	</body>
@endsection