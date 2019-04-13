<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="css/general.css">
   <link rel="stylesheet" type="text/css" href="css/proyectos.css">
   <link rel="stylesheet" type="text/css" href="css/indicadores.css">
   <link rel="stylesheet" type="text/css" href="css/cardProyectos.css">
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
              <li class="breadcrumb-item active" aria-current="page">Proyectos</li>
            </ol>
          </nav>
        </div>
        <div class="col-12">
          <span>Encontramos <strong style="font-family: Gotham-Bold;">{{count($productos)}}</strong> proyectos en los cuales puedes invertir</span>
        </div>
        <div class="col-6">
          <select class="form-control">
            <option>Filtrar</option>
          </select>
        </div>
        <div class="col-6">
          <select class="form-control">
            <option>Organizar</option>
          </select>
        </div>
      </div>
      <div class="row align-items-center" id="grillaProyectos">
        <div class="col-lg-12">
<?php     for ($i = 0; $i < count($productos);){
            if($i+3>=count($productos)){
?>
              <div class="row filaGrilla justify-content-center ultimaFilaGrilla">
<?php
            }else{
?>
              <div class="row filaGrilla justify-content-center">
<?php
            }
              for ($j=0; $j<3; $j++){
                
?>

                 <div class="col-lg-4">
                    <div class="card itemProyecto">
                      <img class="card-img-top" src={{$productos[$i]->primeraImagen->ubicacion}}>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-7 proyectoInicialInfo">
                            <h5 class="card-title proyectoTitulo">{{$productos[$i]->nombre}}</h5>
                          </div>
                          <div class="col-5 plazoInversion">
                            <span>Plazo de Inversión</span>
                            <h5>{{$productos[$i]->caracteristicasFinancieras->plazo_meses}} meses</h5>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12" style="margin: 1rem 0;">
                            <div class="indicadores d-inline-flex d-flex align-items-end">
                              @if($productos[$i]->tiempoInversion=='temprana')
                                <div class="d-flex align-items-center justify-content-center inversion temprana activeInversion">
                              @else
                                <div class="d-flex align-items-center justify-content-center inversion temprana">
                              @endif
                                <div class="text-center">
                                  <p>Inversión Temprana</p>
                                  <p>10.11%</p>
                                </div>
                              </div>
                              @if($productos[$i]->tiempoInversion=='normal')
                                <div class="d-flex align-items-center justify-content-center inversion normal activeInversion">
                              @else
                                <div class="d-flex align-items-center justify-content-center inversion normal">
                              @endif
                                <div class="text-center">
                                  <p>Inversión Normal</p>
                                  <p>9.11%</p>
                                </div>
                              </div>
                              @if($productos[$i]->tiempoInversion=='cierre')
                                <div class="d-flex align-items-center justify-content-center inversion cierre activeInversion">
                              @else
                                <div class="d-flex align-items-center justify-content-center inversion cierre">
                              @endif
                                <div class="text-center">
                                  <p>Inversión Cierre</p>
                                  <p>8.11%</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-12">
                             <p class="text-justify" style="font-size:.8rem;">La rentabilidad se genera desde el momento de partida de la obra.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-12 proyectoButton d-lg-none">
                        <a href="detalleProyecto/{{$productos[$i]->id}}">
                          <button type="button" class="btn btn-primary btn-lg blue-btn">Invertir en este Proyecto</button>
                        </a>
                      </div>
                    </div>
                    <div class="proyectoButton d-none d-lg-block">
                      <a href="detalleProyecto/{{$productos[$i]->id}}">
                        <button type="button" class="btn btn-primary btn-lg blue-btn">Invertir en este Proyecto</button>
                      </a>
                    </div>
                  </div>
<?php             $i++;
                  if($i==count($productos)){
                    break;
                  }
                }
?>
            </div>
<?php     }
?>
        </div>
      </div>
      @include("footer")
    </div>
    <script type="text/javascript" src="js/general.js"></script>
    <!--<script type="text/javascript" src="js/bootstrap.min.js"></script>-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/proyectos.js"></script>
  </body>
</html>
