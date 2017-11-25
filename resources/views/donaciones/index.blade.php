@extends('layouts.master')

 @section('sidebar')
    <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">

      <br />
  <ul class="nav nav-pills flex-column">
    <li class="nav-item">
      <a class="nav-link" href="voluntarios">Voluntariado</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="donaciones">Donaciones de Dinero</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="donacionesBienes">Donaciones de Bienes</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="evento">Eventos a Beneficio</a>
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
		  Monto:<br>
		  <input type="text" name="monto" ><br><br>
		  <input type="submit">
		</form>
		<br>
		
	</body>
@endsection