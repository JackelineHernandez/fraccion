<div id="carouselContenidoCaracteristicas{{$carTecnica->id}}" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
<?php for ($i=0; $i<count($carTecnica->contenidos); $i++) {
      if($i==0){
?>
        <div class="carousel-item active">
<?php   }else {                                                          ?>
        <div class="carousel-item">
<?php   } ?>
        @if($carTecnica->contenidos[$i]->tipo_contenidos_id==1)
          <img class="d-block w-100" src={{ url($carTecnica->contenidos[$i]->ubicacion) }} alt="">
        @elseif($carTecnica->contenidos[$i]->tipo_contenidos_id==2)
          <video src={{ url($carTecnica->contenidos[$i]->ubicacion) }} controls></video>
        @endif

        <div class="carousel-caption d-none d-md-block" id="eliminarContenido{{$carTecnica->contenidos[$i]->id}}" style="display:none !important">
          <div><a href="#" onclick="eliminarContenido({{$carTecnica->contenidos[$i]->id}}, {{$carTecnica->id}})">Eliminar</a></div> 
        </div>
      </div>
<?php }                                                                  ?>
  </div>
  <a class="carousel-control-prev" href="#carouselContenidoCaracteristicas{{$carTecnica->id}}" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselContenidoCaracteristicas{{$carTecnica->id}}" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<script type="text/javascript" src={{asset('js/admin/contenidosCaracteristica.js')}} charset="UTF-8"></script>
