@extends('layouts.master')

@section('content')
	<head>
		<title>Contacto</title>
	</head>
	<body>
		<h1>Contactos</h1>

		<form action="/comentario.create">
		  <textarea name="message" style="width:400px; height:200px;">The cat was playing in the garden.</textarea>
		  <br>
		  <input type="submit">
		</form>
		<br>
		<button type="button" onclick="alert('Hello World!')">Click Me!</button>

	</body>
@endsection