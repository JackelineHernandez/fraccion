<fieldset>
  <legend>Contenido</legend>
  <div id="carouselContendioProducto" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" id="carousel-contenido-producto">
<?php if(isset($producto)){
        for ($i=0; $i<count($producto->contenidos); $i++) {
          if($i==0){
?>
            <div class="carousel-item active">
<?php     }else {                                                          ?>
            <div class="carousel-item">
<?php     }                                                               ?>
          @if($producto->contenidos[$i]->tipo_contenidos_id==1)
            <img class="d-block w-100" src={{ url($producto->contenidos[$i]->ubicacion) }} alt="">
          @elseif($producto->contenidos[$i]->tipo_contenidos_id==2)
            <video src={{ url($producto->contenidos[$i]->ubicacion) }} controls></video>
          @endif
          
          @if(strpos($_SERVER["REQUEST_URI"], "edit"))
            <div class="carousel-caption d-none d-md-block">
              <div><a href="#" onclick="eliminar({{$producto->contenidos[$i]->id}}, {{$producto->id}})">Eliminar</a></div> 
            </div>
          @endif
          </div>
<?php   }
      }                                                                  ?>
    </div>
    <a class="carousel-control-prev" href="#carouselContendioProducto" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselContendioProducto" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</fieldset>

<script type="text/javascript" src={{asset('js/admin/contenidosProducto.js')}} charset="UTF-8"></script>
