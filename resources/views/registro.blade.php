<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="css/general.css">
   <link rel="stylesheet" type="text/css" href="css/registro.css">
    <title>Fraccion</title>
  </head>
  <body>
    <div class="container-fluid">
      @include("simpleHeader")
      <div class="row filtro">
        <div class="co-12 d-none d-lg-block">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Inicio</a></li>
              <li class="breadcrumb-item active" aria-current="page">Registro Fracción</li>
            </ol>
          </nav>
        </div>
      </div>
      <form action="/api/registro" method="post" id="formRegistro">
        <div class="row group1" id="group1" >
          <div class="col-12 col-lg-6 offset-lg-3">
            <div class="form-group col-12">
              <h5 for="inputNombres">Nombres</h5>
              <input type="text" class="form-control" id="inputNombres" name="inputNombres">
            </div>
            <div class="form-group col-12">
              <h5 for="inputApellidos">Apellidos</h5>
              <input type="text" class="form-control" id="inputApellidos" name="inputApellidos">
            </div>
            <div class="form-group col-6 offset-6 col-lg-3 offset-lg-9">
              <a href="#" id="enlaceSiguiente1" class="botonSiguiente"><span>Siguiente</span><img src="svg/arrowRightIcoBlueOff.svg" class="flecha"></a>
            </div>
          </div>
        </div>
        <div class="row group2" id="group2">
          <div class="col-12 col-lg-6 offset-lg-3">
            <h5 for="labelFecha">Fecha de Nacimiento</h5>
            <div class="form-group col-12">
              <label for="inputDia">Dia</label>
              <select class="form-control" id="inputDia" name="inputDia">
                <option value="0" selected></option>
                @for($i=1; $i<=31; $i++)
                  <option value="{{$i <10 ? '0'.$i : $i}}">{{$i <10 ? '0'.$i : $i}}</option>
                @endfor
              </select>
            </div>
            <div class="form-group col-12">
              <label for="inputMes">Mes</label>
              <select class="form-control" id="inputMes" name="inputMes">
                <option value="0" selected></option>
                @for($i=1; $i<=12; $i++)
                  <option value="{{$i <10 ? '0'.$i : $i}}">{{$i <10 ? '0'.$i : $i}}</option>
                @endfor
              </select>
            </div>
            <div class="form-group col-12">
              <label for="inputAno">Año</label>
              <select class="form-control" id="inputAno" name="inputAno">
                <option value="0" selected></option>
                @for($i=1940; $i<=2018; $i++)
                  <option value="{{$i}}">{{$i}}</option>
                @endfor
              </select>
            </div>
            <div class="form-group col-6 offset-6">
              <a href="#" id="enlaceSiguiente2" class="botonSiguiente"><span>Siguiente</span><img src="svg/arrowRightIcoBlueOff.svg" class="flecha"></a>
            </div>
          </div>
        </div>
        <div class="row group3" id="group3">
          <div class="col-12 col-lg-6 offset-lg-3">
            <h5 for="labelFecha">Teléfono</h5>
            <div class="form-group row">
              <label for="inputPais" class="col-12" >País</label>
              <div class="col-4">
                <input type="text" class="form-control" id="inputPais" name="inputPais">
              </div>
              <div class="col-8">
                <input type="text" class="form-control" id="inputNumero" name="inputNumero">
              </div>
            </div>
            <div class="form-group row">
              <h5 for="inputEmail" class="col-12" >Email</h5>
              <div class="col-12">
                <input type="email" class="form-control" id="inputEmail" name="inputEmail">
              </div>
            </div>
            <div class="form-group col-6 offset-6">
              <a href="#" id="enlaceSiguiente3" class="botonSiguiente"><span>Siguiente</span><img src="svg/arrowRightIcoBlueOff.svg" class="flecha"></a>
            </div>
          </div>
        </div>
      </form>
      <div class="row group4" id="group4">
        <div class="col-12 col-lg-6 offset-lg-3">
          <h5 class="col-12 d-flex justify-content-center">Gracias por registrarte.</h5>
          <h5 class="col-12 d-flex justify-content-center text-center">Ahora revisa tu correo electónico para acceder a nuestro Webinar</h5>
          <div class="col-12 d-flex justify-content-center">
            <a href="#" id="enlaceSiguiente4" class="botonSiguienteActive"><span>Revisa tu correo</span><img src="svg/arrowRightIcoBlue.svg" class="flecha"></a>
          </div>
        </div>
      </div>
      @include("footer")
    </div>
    <!--<script type="text/javascript" src="js/bootstrap.min.js"></script>-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script type="text/javascript" src="js/general.js"></script>
    <script type="text/javascript" src="js/registro.js"></script>
    
  </body>
</html>
