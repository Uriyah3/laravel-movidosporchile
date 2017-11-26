@extends('layouts.master')

@section('sidebar')
    @include('layouts.sidebarUsuario')
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
		  
		  <input type="submit">
		</form>
		<br>
		
	</body>
@endsection