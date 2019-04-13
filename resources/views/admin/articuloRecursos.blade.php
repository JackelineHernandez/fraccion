<div id="carouselRecursoArticulo" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" id="carousel-recurso-articulo">

<?php if(isset($articulo)){
        for ($i=0; $i<count($articulo->recursos); $i++) {
          if($i==0){
?>
            <div class="carousel-item active">
<?php     }else {                                                          ?>
            <div class="carousel-item">
<?php     } 
          if($articulo->recursos[$i]->tipo_recurso_id==1){ 
?>
            <img class="d-block w-100" src={{ url($articulo->recursos[$i]->ruta) }} alt="">
<?php 
          }else if($articulo->recursos[$i]->tipo_recurso_id==2){
?>
            <video src={{ url($articulo->recursos[$i]->ruta) }} controls></video>
<?php     }
          if((Session::get('articuloCreate')!=null && Session::get('articuloCreate')=='true') || Session::get('articuloEdit')!=null && Session::get('articuloEdit')=='true'){
?>
            <div class="carousel-caption d-none d-md-block">
            <div><a href="#" onclick="abrirModal({{$articulo->recursos[$i]->posicion}}, {{$articulo->recursos[$i]->id}})">Cambiar Posicion</a></div>
              <div><a href="#" onclick="eliminar({{$articulo->recursos[$i]->id}})">Eliminar</a></div> 
                
            </div>
             
<?php     }
?>
          </div>
<?php
        }
      }                                                                  ?>
    </div>
    <a class="carousel-control-prev" href="#carouselRecursoArticulo" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselRecursoArticulo" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
  </div>
  <script type="text/javascript" src={{asset('js/admin/articuloRecursos.js')}} charset="UTF-8"></script>
