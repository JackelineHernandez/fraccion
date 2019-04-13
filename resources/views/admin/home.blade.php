<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="{{asset('css/general.css')}}">
   @yield('css')
    <title>Fraccion Admin</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-2">
          <nav class="navbar navbar-dark bg-primary flex-column">
            <a class="navbar-brand" href="#">Fraccion</a>
              <ul class="navbar-nav flex-column">
                <li class="nav-item active">
                  <a class="nav-link" href="/admin/productos">Proyectos</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="/admin/articulos">Blog</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="/admin/registros">Registros</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#">Configuración</a>
                </li>
              </ul>
          </nav>
        </div>
        <div class="col-10">
          @yield('content')
        </div>
      </div>
    </div>
    <!--<script type="text/javascript" src="js/bootstrap.min.js"></script>-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    @yield('javascript')
  </body>
</html>
