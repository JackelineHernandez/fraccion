<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="{{asset('css/general.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('css/detalleProyecto.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('css/indicadores.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('css/cardProyectos.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('css/cardSimulador.css')}}">
    <title>Fraccion</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row z-index-1">
        <div class="col-12 fondo">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              @for($i=0; $i<count($producto->contenidos); $i++)
                @if($i==0)
                  <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}" class="active"></li>
                @else
                  <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}"></li>
                @endif
              @endfor 
            </ol>
            <div class="carousel-inner">
              @for($i=0; $i<count($producto->contenidos); $i++)
                @if($i==0)
                  <div class="carousel-item carousel-item-proyecto active" id="carousel-item{{$i}}" style="background-image: url('../{{$producto->contenidos[$i]->ubicacion}}')"></div>
                @else
                  <div class="carousel-item carousel-item-proyecto" id="carousel-item{{$i}}" style="background-image: url('../{{$producto->contenidos[$i]->ubicacion}}')"></div>
                @endif
              @endfor        
            </div>
          </div>
        </div>
        <div class="col-12 header">
          <div class="row align-items-center headerRow" id="header">
            <div class="col-9 col-lg-3 logo d-flex align-content-center">
              <nav class="navbar navbar-light d-lg-none">
                <button class="navbar-toggler" id="botonMenu" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <img src="{{asset('svg/hamburguesaIco.svg')}}">
                </button>
              </nav>
              <a href="/" style="height:auto; width:100%"></a>
            </div>
            <div class="col-3 col-lg-2 miCuenta order-lg-3">
              <nav class="navbar navbar-expand-lg justify-content-center navbar-dark">
                <a class="nav-item nav-link text-white" href="#">
                  <img class="pr-2"src="{{asset('svg/userIco.svg')}}"/>
                  <span class="float-right d-none d-lg-block .d-xl-none">  Mi Cuenta</span>
                </a>
              </nav>
            </div>
            <div class="col-12 col-lg-7 menu order-lg-2">
              <nav class="navbar navbar-expand-lg">
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                    <a class="nav-item nav-link menuItem text-lg-center" href="/"><span>Inicio</span> <img src="{{asset('svg/arrowRightIcoBlue.svg')}}" class="float-right d-lg-none"></a>
                    <a class="nav-item nav-link menuItem text-lg-center" href="/comoFunciona"><span>¿Cómo Funciona?</span> <img src="{{asset('svg/arrowRightIcoBlue.svg')}}" class="float-right d-lg-none"></a>
                    <a class="nav-item nav-link menuItem text-lg-center" href="/proyectos"><span>Proyectos</span><img src="{{asset('svg/arrowRightIcoBlue.svg')}}" class="float-right d-lg-none"></a>
                    <a class="nav-item nav-link menuItem text-lg-center" href="#"><span>Fraccionarios</span><img src="{{asset('svg/arrowRightIcoBlue.svg')}}" class="float-right d-lg-none"></a>
                    <a class="nav-item nav-link menuItem text-lg-center" href="/articulos"><span>Academia</span><img src="{{asset('svg/arrowRightIcoBlue.svg')}}" class="float-right d-lg-none"></a>
                    <a class="nav-item nav-link menuItem text-lg-center" href="/#"><span>FAQs</span><img src="{{asset('svg/arrowRightIcoBlue.svg')}}" class="float-right d-lg-none"></a>
                  </div>
                </div>
              </nav>
              <div class="contactMenu d-lg-none d-flex align-items-center d-flex justify-content-center" style="display:none">
                <img class="float-left" src="{{asset('svg/whatsappIco.svg')}}">
                <div class="float-right">
                  <p class="card-text text-center">Habla con nosotros</p>
                  <h4 class="card-title text-center">310 414 5785</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-7 d-none d-lg-block info ">
          @include("cardSimulador")
        </div>
      </div>
      <div class="row filaContenido z-index-2">
        <div class="co-12 col-lg-7 d-none d-lg-block">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Inicio</a></li>
              <li class="breadcrumb-item"><a href="/proyectos">Proyectos</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{$producto->nombre}}</li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row contenido filaContenido">
        <div class="col-12 col-lg-7">
          <h1 class="proyectoNombre">{{$producto->nombre}}</h1>
        </div>
      </div>
      <div class="row filaContenido">
        <div class="accordion col-12 d-lg-none" id="accordionCaracteristicas">
          <div class="card">
            <div class="card-header headerActive" id="heading0">
              <h5 class="mb-0">
                <button id="button0" class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse0" aria-expanded="true" aria-controls="collapse0">Descripción</button>
              </h5>
            </div>
            <div id="collapse0" class="collapse show" aria-labelledby="heading0" data-parent="#accordionCaracteristicas">
              <div class="card-body">
                  <div class="carDescripcion">  
                    {{$producto->descripcion}}
                  </div>
              </div>
            </div>
          </div>
          @if($producto->caracteristicasTecnicasVisible->isNotEmpty())
            @for($i=0; $i<count($producto->caracteristicasTecnicasVisible); $i++)
              <div class="card">
                <div class="card-header" id="heading{{$i+1}}">
                  <h5 class="mb-0">
                    <button id="button{{$i+1}}" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse{{$i+1}}" aria-expanded="false" aria-controls="collapse{{$i+1}}">
                      {{$producto->caracteristicasTecnicasVisible[$i]->nombre}}
                    </button>
                  </h5>
                </div>
                <div id="collapse{{$i+1}}" class="collapse" aria-labelledby="heading{{$i+1}}" data-parent="#accordionCaracteristicas">
                  <div class="card-body">
                    <div class="carDescripcion">
                      {{$producto->caracteristicasTecnicasVisible[$i]->descripcion}}
                    </div>
                    <div id="carouselCaractConten{{$i}}" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        @for($j=0; $j<count($producto->caracteristicasTecnicasVisible[$i]->contenidos); $j++)
                          @if($j==0)
                            <li data-target="#carouselCaractConten{{$i}}" data-slide-to="{{$j}}" class="active"></li>
                          @else
                            <li data-target="#carouselCaractConten{{$i}}" data-slide-to="{{$j}}"></li>
                          @endif
                        @endfor
                      </ol>
                      <div class="carousel-inner">
                        @for($j=0; $j<count($producto->caracteristicasTecnicasVisible[$i]->contenidos); $j++)
                          @if($j==0)
                            <div class="carousel-item active">
                          @else
                            <div class="carousel-item">
                          @endif

                          @if($producto->caracteristicasTecnicasVisible[$i]->contenidos[$j]->tipo_contenidos_id==1)
                            <img class="d-block w-100" src="{{asset($producto->caracteristicasTecnicasVisible[$i]->contenidos[$j]->ubicacion)}}" alt="">
                          @elseif($producto->caracteristicasTecnicasVisible[$i]->contenidos[$j]->tipo_contenidos_id==2)
                            <video src="{{asset($producto->caracteristicasTecnicasVisible[$i]->contenidos[$j]->ubicacion)}}" controls></video>
                          @endif 
                            </div>
                        @endfor
                      </div>
                      <a class="carousel-control-prev" href="#carouselCaractConten{{$i}}" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselCaractConten{{$i}}" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            @endfor
          @endif
          
          @if($producto->productoMap)
            <div class="card">
              <div class="card-header" id="heading{{count($producto->caracteristicasTecnicasVisible)+1}}">
                <h5 class="mb-0">
                  <button id="button{{count($producto->caracteristicasTecnicasVisible)+1}}" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse{{count($producto->caracteristicasTecnicasVisible)+1}}" aria-expanded="false" aria-controls="collapse{{count($producto->caracteristicasTecnicasVisible)+1}}">
                    Ubicación
                  </button>
                </h5>
              </div>
              <div id="collapse{{count($producto->caracteristicasTecnicasVisible)+1}}" class="collapse" aria-labelledby="heading{{count($producto->caracteristicasTecnicasVisible)+1}}" data-parent="#accordionCaracteristicas">
                <div class="card-body">
                  <input type="hidden" id="longitud" value="{{$producto->productoMap->longitud}}" />
                  <input type="hidden" id="latitud" value="{{$producto->productoMap->latitud}}" />
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="card" id="map-container">
                        <section id="map"></section>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endif  
        </div>
        <div class="col-7 descripcionLg d-none d-lg-block">
          <h5 class="tittle5-blueLight">Descripción</h5>
          <p>{{$producto->descripcion}}</p>
        </div>
      </div>
      
        <div class="row filaContenido d-none d-lg-block">
          <div class="col-12">
            <ul class="nav nav-tabs" role="tablist">
              @for($i=0; $i<count($producto->caracteristicasTecnicasVisible); $i++)
                <li class="nav-item">
                  @if($i==0)
                    <a class="nav-link active" data-toggle="tab" href="#car{{$i}}">{{$producto->caracteristicasTecnicasVisible[$i]->nombre}}</a>
                  @else
                    <a class="nav-link" data-toggle="tab" href="#car{{$i}}">{{$producto->caracteristicasTecnicasVisible[$i]->nombre}}</a>
                  @endif
                </li>
              @endfor
              @if($producto->productoMap)
                <li class="nav-item">
                  @if(count($producto->caracteristicasTecnicasVisible)>0)
                    <a class="nav-link" data-toggle="tab" href="#ubicacion">Ubicación</a>
                  @else
                    <a class="nav-link active" data-toggle="tab" href="#ubicacion">Ubicación</a>
                  @endif
                </li>
              @endif
            </ul>
            <div class="tab-content">
              @for($i=0; $i<count($producto->caracteristicasTecnicasVisible); $i++)
                @if($i==0)
                  <div id="car{{$i}}" class="container tab-pane active"><br>
                @else
                  <div id="car{{$i}}" class="container tab-pane"><br>
                @endif
                    <p>{{$producto->caracteristicasTecnicasVisible[$i]->descripcion}}</p>
                    <div id="carouselCaractContenLg{{$i}}" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        @for($j=0; $j<count($producto->caracteristicasTecnicasVisible[$i]->contenidos); $j++)
                          @if($j==0)
                            <li data-target="#carouselCaractContenLg{{$i}}" data-slide-to="{{$j}}" class="active"></li>
                          @else
                            <li data-target="#carouselCaractContenLg{{$i}}" data-slide-to="{{$j}}"></li>
                          @endif
                        @endfor
                      </ol>
                      <div class="carousel-inner">
                        @for($j=0; $j<count($producto->caracteristicasTecnicasVisible[$i]->contenidos); $j++)
                          @if($j==0)
                            <div class="carousel-item active">
                          @else
                            <div class="carousel-item">
                          @endif
                          @if($producto->caracteristicasTecnicasVisible[$i]->contenidos[$j]->tipo_contenidos_id==1)
                            <img class="d-block w-100" src="{{asset($producto->caracteristicasTecnicasVisible[$i]->contenidos[$j]->ubicacion)}}" alt="">
                          @elseif($producto->caracteristicasTecnicasVisible[$i]->contenidos[$j]->tipo_contenidos_id==2)
                            <video src="{{asset($producto->caracteristicasTecnicasVisible[$i]->contenidos[$j]->ubicacion)}}" controls></video>
                          @endif 
                              
                            </div>
                        @endfor
                      </div>
                      <a class="carousel-control-prev" href="#carouselCaractContenLg{{$i}}" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselCaractContenLg{{$i}}" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
              @endfor
              @if($producto->productoMap)
                @if(count($producto->caracteristicasTecnicasVisible)>0)
                  <div id="ubicacion" class="container tab-pane"><br>
                @else 
                  <div id="ubicacion" class="container tab-pane active"><br>
                @endif
                  <input type="hidden" id="longitud-desktop" value="{{$producto->productoMap->longitud}}" />
                  <input type="hidden" id="latitud-desktop" value="{{$producto->productoMap->latitud}}" />
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="card" id="map-container-desktop">
                        <section id="map-desktop"></section>
                      </div>
                    </div>
                  </div>
                </div>
              @endif
            </div>
          </div>
        </div>
      
      
      <div class="row contenido d-lg-none">
        @include("cardSimulador")
      </div>
      <div class="row filaContenido filaCompartir">
        <div class="col-12">
          <span class="compartir"><img src="{{asset('svg/shareProjectIco.svg')}}">   Compartir Proyecto</span>
        </div>
      </div>
      
      <div class="row filaContenido">
        <div class="col-12">
          <h2 class="simulador">Proyectos Similares</h2>
        </div>
        <div class="col-12 d-none d-lg-block">
          <div class="row filaGrilla justify-content-center" id="grillaProyectos">
<?php     
          
          if(count($productos)>3)
            $cant=3;
          else
            $cant=count($productos);
            
          for ($i = 0; $i < $cant; $i++){

            if(isset($productos[$i])){
              
              if($productos[$i]->id==$producto->id){
                  continue;
              }
              
  ?>   
              <div class="col-lg-4">
                <div class="card itemProyectoDetalle">
                  <img class="card-img-top" src={{asset($productos[$i]->primeraImagen->ubicacion)}}>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-7 proyectoInicialInfo">
                        <a href="/detalleProyecto/{{$productos[$i]->id}}"><h5 class="card-title proyectoTitulo">{{$productos[$i]->nombre}}</h5></a>
                      </div>
                      <div class="col-5 plazoInversion">
                        <span>Plazo de Inversión</span>
                        <h6>{{$productos[$i]->caracteristicasFinancieras->plazo_meses}} meses</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
<?php         
            }
          }                                                                                     ?>
          </div>
        </div>
       
        <div class="col-12 d-lg-none">
          <div class="row filaGrilla justify-content-center" id="grillaProyectos">
<?php     
          $cant=1;
          for ($i = 0; $i < $cant; $i++){
            if($productos[$i]->id==$producto->id){
              $cant++;
              continue;
            }
  ?>
              <div class="col-lg-4">
                <div class="card itemProyectoDetalle">
                  <img class="card-img-top" src={{asset($productos[$i]->primeraImagen->ubicacion)}}>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-7 proyectoInicialInfo">
                        <a href="/detalleProyecto/{{$productos[$i]->id}}"><h5 class="card-title proyectoTitulo">{{$productos[$i]->nombre}}</h5></a>
                      </div>
                      <div class="col-5 plazoInversion">
                        <span>Plazo de Inversión</span>
                        <h6>{{$productos[$i]->caracteristicasFinancieras->plazo_meses}} meses</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
<?php     }                                                                                     ?>
          </div>
        </div>
      </div>
      @if($producto->productoMap)
        <input type="hidden" id="cant" value={{count($producto->caracteristicasTecnicasVisible)+2}}>
      @else
        <input type="hidden" id="cant" value={{count($producto->caracteristicasTecnicasVisible)+1}}>
      @endif
      <div class="row d-lg-none filaVolver">
        <div class="col-12">
          <a href="/proyectos"><span class="compartir float-right"><img src="{{asset('svg/arrowLeftIcoBlue.svg')}}">       Volver a Proyectos</span></a>
        </div>
      </div>
      @include("footer")
    </div>
    <!--<script type="text/javascript" src="js/bootstrap.min.js"></script>-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="{{asset('js/general.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/detalleProyecto.js')}}"></script>
    @if($producto->productoMap)
      <!--GoogleMaps-->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOSJ01wfza-kHun3hRMGQO03hnHvjJLmg&signed_in=true"
          async defer>
      </script>
      <script type="text/javascript" src="{{asset('js/map.js')}}"></script>
    @endif
  </body>
</html>
