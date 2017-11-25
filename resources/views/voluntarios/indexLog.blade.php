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
	<h1>Voluntarios</h1>
@endsection