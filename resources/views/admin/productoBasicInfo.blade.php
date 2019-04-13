@extends('admin.home')

@section('content')
<fieldset>
  <legend>Proyecto: Información General</legend>
  <div class="row">
    <span class="col-2"><strong>Nombre:</strong></span>
    <span class="col-5">{{$producto->nombre}}</span>
  </div>
  <div class="row">
    <span class="col-2"><strong>Descripción:</strong></span>
    <span class="col-5">{{$producto->descripcion}}</span>
  </div>
  <div class="row">
    <span class="col-3"><strong>Fecha Inicio:</strong></span>
    <span class="col-3">{{$producto->fecha_inicio}}</span>
    <span class="col-3"><strong>Fecha Vencimiento:</strong></span>
    <span class="col-3">{{$producto->fecha_vencimiento}}</span>
  </div>
  <div class="row">
    <span class="col-3"><strong>Inversión Máxima:</strong></span>
    <span class="col-3">{{$producto->maxima_inversion}}</span>
    <span class="col-3"><strong>Inversión Mínima:</strong></span>
    <span class="col-3">{{$producto->minima_inversion}}</span>
  </div>
  <div class="row">
    <span class="col-3"><strong>Máximo de Inversionistas:</strong></span>
    <span class="col-3">{{$producto->maximo_inversionistas}}</span>
    <span class="col-3"><strong>Mínimo de Inversionistas:</strong></span>
    <span class="col-3">{{$producto->minimo_inversionistas}}</span>
  </div>
</fieldset>
<fieldset>
  <legend>Proyecto: Ubicación</legend>
  <div class="row">
    <span class="col-2"><strong>Dirección:</strong></span>
    <span class="col-5">{{$producto->productoMap->direccion}}</span>
  </div>
  <div class="row">
    <span class="col-3"><strong>Longitud:</strong></span>
    <span class="col-3">{{$producto->productoMap->longitud}}</span>
    <span class="col-3"><strong>Latitud:</strong></span>
    <span class="col-3">{{$producto->productoMap->latitud}}</span>
  </div>
</fieldset>
<fieldset>
  <legend>Proyecto: Características Financieras</legend>
  <div class="row">
    <span class="col-3"><strong>Rentabilidad Anuals:</strong></span>
    <span class="col-3">{{$producto->caracteristicasFinancieras->rentabilidad_anual}}</span>
    <span class="col-3"><strong>Rentabilidad Mensual:</strong></span>
    <span class="col-3">{{$producto->caracteristicasFinancieras->rentabilidad_mensual}}</span>
  </div>
  <div class="row">
    <span class="col-2"><strong>Plazo en Meses:</strong></span>
    <span class="col-1">{{$producto->caracteristicasFinancieras->plazo_meses}}</span>
    <span class="col-3"><strong>Objetivo de Financiación:</strong></span>
    <span class="col-1">{{$producto->caracteristicasFinancieras->objetivo_financiacion}}</span>
    <span class="col-3"><strong>Beneficio de Operación:<strong></span>
    <span class="col-1">{{$producto->caracteristicasFinancieras->beneficio_operacion}}</span>
  </div>
</fieldset>
<?php 
  $urlCreate = strpos($_SERVER["REQUEST_URI"], "create"); 
  $urlEdit = strpos($_SERVER["REQUEST_URI"], "edit");   
?>
  @include('admin.contenidosProducto')
 
<?php if(!$urlCreate && !$urlEdit ){                                                              ?>
    <fieldset>
      <legend>Caracteristicas Tecnicas</legend>
      @include('admin.caracteristicasTecnicas')
    </fieldset>
<?php }                                                                       ?>  
  @yield('caracteristicasTecnicasCreate')
@endsection

