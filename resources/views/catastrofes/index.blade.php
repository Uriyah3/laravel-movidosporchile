@extends('layouts.master')

 @section('sidebar')
    @include('layouts.sidebar')
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
