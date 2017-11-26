
<header>
  <!-- Cambiar bg-* y navbar-* para poder cambiar color (a otra clase) -->
  <!-- Se debe usar !important al realizar el cambio de color -->
  <nav class="navbar navbar-expand-md fixed-top bg-dark navbar-dark">

    <a class="navbar-brand logo" href="/">
      <img src="imagenes/logo.png"  height="40" alt="Movidos X Chile">
    </a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse nav-pills nav-fill">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('organizacion') }}">¿Quiénes somos?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('contactos') }}">Contáctanos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('catastrofes') }}">Catástrofes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('medidas') }}">Medidas de ayuda</a>
        </li>
      </ul>
      @if(Auth::check())
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('actividades') }}">Perfil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
            Logout
          </a>
          <form id="logout-form"
            action="{{ url('logout') }}"
            method="POST"
            style="display: none;">
            {{ csrf_field() }}
          </form>
        </li>
      </ul>
      @endif
    </div>
  </nav>
</header>

