@extends('layouts.master')

@section('content')
	<head>
		<title>Catastrofes</title>
	</head>
	<body>
		<h1>Catastrofes identificadas</h1>
		<form action="/Catastrofes/create" method="POST">
		  Region:<br>
		   <select name="Catastrofes">
		    <option value="1">Tarapaca</option>
		    <option value="2">Antofagasta</option>
		    <option value="3">Atacama</option>
		    <option value="4">Coquimbo</option>
		    <option value="5">Valaparaiso</option>
		    <option value="6">General B. O´higgns</option>
		    <option value="7">Maule</option>
		    <option value="8">Bio Bio</option>
		    <option value="9">Araucania</option>
		    <option value="10">Los lagos</option>
		    <option value="11">Aisen</option>
		    <option value="12">Magallanes</option>
		    <option value="13">Metropolitana</option>
		    <option value="14">Los rios</option>
		  </select><br /><br />
		  Provincia:<br>
		  <input type="text" name="Provincia" value placeholder="Maipu"><br><br />
		  Direccion:<br>
		  <input type="text" name="direccion"  value placeholder="Calle Diosamar" style="width:400px;"><br><br />
		  Tipo Catastrofe:<br>
		  <select name="Catastrofes">
		    <option value="1">Terremoto</option>
		    <option value="2">Tsusami</option>
		    <option value="3">Incendio</option>
		    <option value="4">Crisis humanitaria</option>
		    <option value="5">Epidemias</option>
		  </select><br /><br />
		  Fecha:<br>
		  <input type="date" name="fecha" ><br><br>
		  <input type="submit">
		 
		  <input type="submit">
		</form>
	</body>
@endsection