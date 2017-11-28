@extends('layouts.master')
@section('style')
{{ Html::style('css/perfil.css') }}
@endsection

@section('sidebar')
    @include('layouts.sidebarUsuario')
@endsection

@section('content')

		<h1 class="titulo">Donaciones de Bienes</h1>
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

@endsection