<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="css/general.css">
   <link rel="stylesheet" type="text/css" href="css/calculadora.css">
    <title>Fraccion</title>
  </head>
  <body>
    <div class="container-fluid">
      @include("simpleHeader")
      <div class="row paddingFile">
        <div class="co-12 d-none d-lg-block">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Inicio</a></li>
              <li class="breadcrumb-item active" aria-current="page">Calculadora</li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="col-12 paddingFile">
        <div class="iconoCalculadora d-flex align-items-center">
          <span>Calcula tu inversión</span>
        </div>
      </div>
      <div class="row paddingFile">
        <form action="/" method="get" id="formCalculadora">
          <div class="row group1" id="group1">
            <div class="col-12">
              <p class="pl-lg-5">Un último paso, déjanos tu nombre y tu correo electrónico y te enviaremos tus resultados</p>
            </div>
            <div class="col-12 col-lg-6 offset-lg-3">
              <div class="form-group row">
                <h5 for="inputNombres" class="col-12">Nombre Completo</h5>
                <div class="col-12">
                  <input type="text" class="form-control" id="inputNombres" name="inputNombres">
                </div>
              </div>
              <div class="form-group row">
                <h5 for="inputEmail" class="col-12" >Email</h5>
                <div class="col-12">
                  <input type="email" class="form-control" id="inputEmail" name="inputEmail">
                </div>
              </div>
            </div>
            <div class="col-12 d-flex justify-content-center calculadoraButton">
              <button type="button" class="btn btn-primary btn-lg blue-btn" onclick="activarSiguiente1()">¡Listo!</button>
            </div>
          </div>
          <div class="row group2" id="group2">
            <div class="col-12">
              <p class="text-center">¿Por cuánto tiempo quieres tener la inversión?</p>
            </div>
            <div class="col-12 d-lg-flex justify-content-lg-between">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tiempoInversion" id="tiempoInversion1" value="medioAno">
                <label class="form-check-label" for="tiempoInversion1">Medio Año</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tiempoInversion" id="tiempoInversion2" value="unoAdos">
                <label class="form-check-label" for="tiempoInversion1">Un año a dos</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tiempoInversion" id="tiempoInversion3" value="tresOmas">
                <label class="form-check-label" for="tiempoInversion3">Tres años o más</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tiempoInversion" id="tiempoInversion4" value="masDeDiez">
                <label class="form-check-label" for="tiempoInversion4">Más de diez años</label>
              </div>
            </div>
            <div class="col-12 d-flex justify-content-center calculadoraButton">
              <button type="button" class="btn btn-primary btn-lg blue-btn" onclick="activarSiguiente2()">Continuar</button>
            </div>
          </div>
          <div class="row group3" id="group3" >
            <div class="col-12 col-lg-6 offset-lg-3">
              <p>Una última pregunta ¿Cómo te enteraste de Fracción?</p>
            </div>
            <div class="col-12 col-lg-6 offset-lg-3">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="comoSupo" id="comoSupo1" value="internet">
                <label class="form-check-label label-list" for="comoSupo1">
                  Lo ví en Internet
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="comoSupo" id="comoSupo2" value="amigo/familiar">
                <label class="form-check-label label-list" for="comoSupo2">
                  Me lo recomendó un amigo o familiar
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="comoSupo" id="comoSupo3" value="persona">
                <label class="form-check-label label-list" for="comoSupo3">
                  Por una persona que apenas conozco
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="comoSupo" id="comoSupo4" value="redesSociales">
                <label class="form-check-label" for="comoSupo4">
                  Redes Sociales
                </label>
              </div>
            </div>
            <div class="col-12 d-flex justify-content-center calculadoraButton">
              <button type="button" class="btn btn-primary btn-lg blue-btn" onclick="activarSiguiente3()">Continuar</button>
            </div>
          </div>
          <div class="row group4" id="group4" >
            <div class="col-12 col-lg-10 offset-lg-1">
              <div class="form-group row d-flex align-items-center">
                <label for="objetivo">Mi objetivo al invertir es</label>
                <div class="col-12 col-lg-9">
                  <select class="form-control" id="objetivo" name="objetivo">
                    <option value="noSeguro">No estoy seguro, quiero saber más sobre Fracción</option>
                  </select>
                </div>
              </div>
              <div class="form-group row d-flex align-items-center">
                <label for="planeo">y planeo</label>
                <div class="col-12 col-lg-11">
                  <select class="form-control" id="planeo" name="planeo">
                    <option value="mayoresRendimientos">Obtener mayores rendimientos de los que estoy obteniendo actualmente</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-12 d-flex justify-content-center calculadoraButton">
              <button type="button" class="btn btn-primary btn-lg blue-btn" onclick="activarSiguiente4()">Continuar</button>
            </div>
          </div>
        </form>
      </div>
      @include("footer")
    </div>
    <!--<script type="text/javascript" src="js/bootstrap.min.js"></script>-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script type="text/javascript" src="js/general.js"></script>
    <script type="text/javascript" src="js/calculadora.js"></script>
    
  </body>
</html>
