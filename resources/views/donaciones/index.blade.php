@extends('layouts.master')

 @section('sidebar')
    @include('layouts.sidebar')
@endsection

@section('content')
	<head>
		<title>Donaciones MovidosxChile</title>
	</head>
	<body>
		<h1>Donaciones</h1>
		<form action="/donacion.create">
		  Monto:<br>
		  <input type="email" name="monto" ><br><br>
		  <input type="submit">
		</form>
		<br>
		
	</body>
@endsection