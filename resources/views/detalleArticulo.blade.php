<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="{{asset('css/general.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('css/blog.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('css/blogDetalle.css')}}">
    <title>Fraccion</title>
  </head>
  <body>
    <div class="container-fluid">
      @include("simpleHeader")
      <div class="row contenido">
        <div class="co-12 col-lg-7 d-none d-lg-block">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Inicio</a></li>
              <li class="breadcrumb-item"><a href="/articulos">Blog</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{$articulo->titulo}}</li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row contenido notice">
        <div class="col-12">
          <div class="col-12"><span>Noticia</span></div>
          <div class="col-12"><span>{{$articulo->fecha_creacion}}</span></div>
          <div class="col-12"><h2 class="tituloNoticia">{{$articulo->titulo}}</h2></div>
        </div>
        <div class="col-12">
          <div class="col-12 d-flex justify-content-center"><img src={{asset($articulo->primeraImagen->ruta)}} alt=""></div>
        </div>
        <div class="col-12">
          <div class="col-12"><h4 class="descripcionNoticia">{{$articulo->descripcion}}</h4></div>
        </div>
        <div class="col-12">
          <div class="col-12">
<?php       $cuerpos = explode("\r\n", $articulo->cuerpo);                                                
            for($i=0; $i<count($cuerpos); $i++){
              if($cuerpos[$i]==""){
                unset($cuerpos[$i]);
              }
            }
            
            $recursos = $articulo->recursos->whereNotIn('id', [$articulo->primeraImagen->id]);
            if(count($recursos)>0)
              $posicionR=(int) round(count($cuerpos)/count($recursos));
            else $posicionR=null;
            $i=0;
            $j=-1;
            
?>
            @foreach($cuerpos as $cuerpo)
              <p>{{$cuerpo}}</p>
<?php         $i++;                                                                        ?>

              @if($posicionR!=null && $i==$posicionR)  
                <?php $j++; if(!isset($recursos[$j])) $j++;?>
                @if($recursos[$j]->tipo_recurso_id==1)
                  <div class="col-12 d-flex justify-content-center"><img src="{{asset($recursos[$j]->ruta)}}" alt="" class="recurso"></div>
                @elseif($recursos[$j]->tipo_recurso_id==2)
                  <div class="col-12 d-flex justify-content-center"><video src="{{asset($recursos[$j]->ruta)}}" controls class="recurso"></video></div>
                @endif
                <?php  $i=0;?>
              @endif
            @endforeach
            @if($j<count($recursos))
              @for($j=$j+1; $j<count($recursos)+1; $j++)
                @if(isset($recursos[$j]) && $recursos[$j]->tipo_recurso_id==1)
                  <div class="col-12 d-flex justify-content-center"><img src="{{asset($recursos[$j]->ruta)}}" alt="" class="recurso"></div>
                @elseif(isset($recursos[$j]) && $recursos[$j]->tipo_recurso_id==2)
                  <div class="col-12 d-flex justify-content-center"><video src="{{asset($recursos[$j]->ruta)}}" controls class="recurso"></video></div>
                @endif
              @endfor
            @endif
          </div>
        </div>
      </div>
      @include("footer")
    </div>
    <script type="text/javascript" src="{{asset('js/general.js')}}"></script>
    <!--<script type="text/javascript" src="js/bootstrap.min.js"></script>-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>
      document.getElementById("logoHamburguesa").src="{{asset('svg/menuHamburguesaWhiteIco.svg')}}"
    </script>
  </body>
</html>
