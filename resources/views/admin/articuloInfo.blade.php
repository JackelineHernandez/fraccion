@extends('admin.home')

@section('content')
  <fieldset>
    <legend>Articulo: Información General</legend>
    <div class="row">
      <span class="col-2"><strong>Titulo:</strong></span>
      <span class="col-5">{{$articulo->nombre}}</span>
    </div>
    <div class="row">
      <span class="col-3"><strong>Categoria:</strong></span>
      <span class="col-3">{{$articulo->titulo}}</span>
      <span class="col-3"><strong>Estado:</strong></span>
      <span class="col-3">{{$articulo->estado}}</span>
    </div>
    
    <div class="row">
      <span class="col-2"><strong>Descripción:</strong></span>
      <span class="col-5">{{$articulo->descripcion}}</span>
    </div>
    <div class="row">
      <span class="col-12"><strong>Cuerpo:</strong></span>
      <span class="col-12">{{$articulo->cuerpo}}</span>
    </div>
  </fieldset>

  @if( (Session::get('articuloCreate')!=null && Session::get('articuloCreate')=='true') || (Session::get('articuloEdit')!=null && Session::get('articuloEdit')=='true') )
    @include("admin.articuloRecursosCreate")
  @else 
    <fieldset>
      <legend>Articulo: Recursos</legend>
      @include("admin.articuloRecursos")
    </fieldset>
  @endif
@endsection

