@extends('layouts.master-sidebarless')

@section('style')
<link rel="shortcut icon" type="image/x-icon" href="imagenes/icono.png">
{{ Html::style('css/loginReg.css') }}
@endsection

@section('content')

<br />
<br />
<div class="titulo">
  <h1> Iniciar Sesión </h1>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">

        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('rut') ? ' has-error' : '' }}">
              <label for="rut" class="col-md-4 control-label">Rut</label>

              <div class="col-md-6">
                <input id="rut" type="text" class="form-control" name="rut" value="{{ old('rut') }}" placeholder="11111111-1" required autofocus>

                @if ($errors->has('rut'))
                <span class="help-block">
                  <strong>{{ $errors->first('rut') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label for="password" class="col-md-4 control-label">Contraseña</label>

              <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" placeholder="*****" required>

                @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                  </label>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                  Ingresar
                </button>

                <a class="btn btn-link" href="{{ route('password.request') }}">
                  Olvidaste tu contraseña?
                </a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection