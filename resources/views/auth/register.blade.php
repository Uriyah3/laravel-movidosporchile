@extends('layouts.master-sidebarless')

@section('style')
<link rel="shortcut icon" type="image/x-icon" href="imagenes/icono.png">
{{ Html::style('css/loginReg.css') }}
@endsection

@section('content')

<div class="titulo">
  <h1> Registrarse </h1>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading"></div>

        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <div class="form-row">
              <div class="col">
                <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                  <label for="nombre" class="control-label">Nombre</label>
                  <input id="nombre" type="text" class="form-control" placeholder="Nombre y apellido" name="nombre" value="{{ old('nombre') }}" required autofocus>

                  @if ($errors->has('nombre'))
                  <span class="help-block">
                    <strong>{{ $errors->first('nombre') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <div class="col">
                <div class="form-group{{ $errors->has('rut') ? ' has-error' : '' }}">
                  <label for="rut" class="control-label">Rut</label>
                  <input id="rut" type="text" class="form-control" placeholder="1111111-1" name="rut" value="{{ old('rut') }}" required autofocus>

                  @if ($errors->has('rut'))
                  <span class="help-block">
                    <strong>{{ $errors->first('rut') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email" class="control-label">E-mail</label>
              <input id="email" type="email" class="form-control" placeholder="movidosxchile@mxc.cl" name="email" value="{{ old('email') }}" required>

              @if ($errors->has('email'))
              <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
              @endif
            </div>

            <div class="form-row">
              <div class="col-md-8">
                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                  <label for="username" class="control-label">Nombre de usuario</label>
                  <input id="username" type="text" class="form-control" placeholder="Nombre usuario" name="username" value="{{ old('username') }}" required autofocus>

                  @if ($errors->has('username'))
                  <span class="help-block">
                    <strong>{{ $errors->first('username') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                  <label for="telefono" class="control-label">Teléfono celular</label>
                  <input id="telefono" type="text" class="form-control" placeholder="900000000" name="telefono" value="{{ old('telefono') }}" required autofocus>
                </div>
              </div>
            </div>

            <div class="form-row">
              <div class="col">
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <label for="password" class="control-label">Contraseña</label>
                  <input id="password" type="password" class="form-control" placeholder="******" name="password" required>

                  @if ($errors->has('password'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <div class="col">
                <div class="form-group">
                  <label for="password-confirm" class="control-label">Confirmar Contraseña</label>
                  <input id="password-confirm" type="password" class="form-control" placeholder="******" name="password_confirmation" required>
                </div>
              </div>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary">Registrarse</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection