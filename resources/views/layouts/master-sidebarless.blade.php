<!doctype html>
<html lang="en">
<head>
  <link rel="shortcut icon" type="image/x-icon" href="imagenes/icono.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">

  <title>MovidosxChile</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="/css/dashboard.css" rel="stylesheet">

  <!-- Custom styles for specific pages -->
  @yield('style')
</head>

<body>
  @include('layouts.navbar')

  <div class="container-fluid">
    <div class="row">

      <main class="col-md-10 offset-md-1 pt-4">
        @yield('content')
      </main>
    </div>
  </div>

  <footer>
    @yield('footer')
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  @yield('scripts')
</body>
</html>
