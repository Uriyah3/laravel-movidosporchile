@extends('layouts.master')
 @section('sidebar')
    @include('sidebar.catastrofessinindex')
@endsection

@section('content')
@include('layouts.sidebar');
	<head>
		<title>Catastrofes</title>
	</head>
	<body>
		<h1>Catastrofes identificadas</h1>
	</body>
@endsection
