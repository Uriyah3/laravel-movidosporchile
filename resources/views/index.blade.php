@extends('layouts.master-sidebarless')

@section('style')
{{ Html::style('css/index.css') }}
@endsection

@section('content')

<br />
<br />

<p class="titulo"> Bienvenido a Movidos x Chile </p>

<br />
<br />


<p class="texto">
 Todo lo que necesitas para brindar ayuda a los damnificados de las catástrofes. <br />
 La emergencia no termina, Chile te necesita.
</p>


<br />
<br />
<br />

<div class="sesion">
  <input type="button" value="Iniciar Sesión" class="inicio" onclick = "location='/login'"/>
</div>

<div class="sesion">
  <input type="button" value="Registrarse" class="reg" onclick = "location='/register'"/>
</div>

@endsection


