<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="css/general.css">
   <link rel="stylesheet" type="text/css" href="css/blog.css">
    <title>Fraccion</title>
  </head>
  <body>
    <div class="container-fluid">
      @include("simpleHeader")
      <input type="hidden" id="fecha_creacion" value={{$articulos[0]->fecha_creacion}}>
      <input type="hidden" id="titulo" value="{{$articulos[0]->titulo}}">
      <input type="hidden" id="href" value="/articulos/{{$articulos[0]->id}}">
      <div class="row contenido">
        <div class="co-12 col-lg-7 d-none d-lg-block">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Inicio</a></li>
              <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row contenido">
<?php   
        $cantidadArt = count($articulos)-1;
        $cantidadArt = (int)round($cantidadArt/2);
?>
         <div class="col-12 col-lg-6 colNotice">
            @for ($i=1; $i<$cantidadArt+1; $i++)
              <div class="row notice">
                  <div class="col-12">
                      <div class="col-12"><span>Noticia</span></div>
                      <div class="col-12"><span>{{$articulos[$i]->fecha_creacion}}</span></div>
                      <div class="col-12"><img src={{$articulos[$i]->primeraImagen->ruta}} alt=""></div>
                      <div class="col-12"><h3>{{$articulos[$i]->titulo}}</h3></div>
                      <div class="col-12"><p> {{$articulos[$i]->descripcion}}  </p></div>
                      <div class="col-12"><a href="/articulos/{{$articulos[$i]->id}}"><span>Ver más</span>         <img src="svg/arrowRightIcoBlue.svg"></a></div>
                  </div>
              </div>
            @endfor
          </div>
          <div class="col-12 col-lg-6 colNotice">
            @for ($j=0, $i=$cantidadArt+1; $j<$cantidadArt; $i++, $j++)
              @if(isset($articulos[$i]))
                <div class="row notice">
                    <div class="col-12">
                        <div class="col-12"><span>Noticia</span></div>
                        <div class="col-12"><span>{{$articulos[$i]->fecha_creacion}}</span></div>
                        <div class="col-12"><img src={{$articulos[$i]->primeraImagen->ruta}} alt=""></div>
                        <div class="col-12"><h3>{{$articulos[$i]->titulo}}</h3></div>
                        <div class="col-12"><p> {{$articulos[$i]->descripcion}}  </p></div>
                        <div class="col-12"><a href="/articulos/{{$articulos[$i]->id}}"><span>Ver más</span>         <img src="svg/arrowRightIcoBlue.svg"></a></div>
                    </div>
                </div>
              @endif
            @endfor
          </div>
          <div class="col-12">
            {{ $articulos->links() }}
          </div>
      </div>
      @include("footer")
    </div>
    <script type="text/javascript" src="js/general.js"></script>
    <script type="text/javascript" src="js/blogs.js"></script>
    <!--<script type="text/javascript" src="js/bootstrap.min.js"></script>-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
