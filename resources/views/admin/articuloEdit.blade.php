@extends('admin.home')

@section('css')
  <link rel="stylesheet" media="screen" href="{{asset('css/articuloCreate.css')}}">
@endsection
@section('content')
    <div class="container">
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      <form accept-charset="UTF-8" enctype="multipart/form-data" style="margin-top:2rem;" method="POST" action="/api/admin/articulos/{{$articulo->id}}">
      {{ method_field('PUT') }}
        <fieldset>
          <legend>Blog: Información General</legend>
          <div class="form-group row">
            <div class="form-group col-12">
              <label for="inputTitulo" class="col-2 col-form-label">Título</label>
              <div class="col-10">
                <input type="text" class="form-control" id="inputTitulo"  name="inputTitulo" placeholder="Nombre Proyecto" value="{{Session::get('input')['inputTitulo']}}">
              </div>
            </div>
            
          </div>
          <div class="form-group row">
            <div class="form-group col-6">
              <label for="inputCategoria" class="col-6 col-form-label">Categoria</label>
              <div class="col-10">
                <select class="form-control" id="inputCategoria" name="inputCategoria">
                <option value="0">Seleccione</option>
                  @foreach($categorias as $categoria)
                    <option value="{{$categoria->id}}">{{$categoria->descripcion}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-group col-6">
              <label for="inputEstado" class="col-6 col-form-label">Estado</label>
              <div class="col-10">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inputEstado" id="inputEstado1" value="1">
                  <label class="form-check-label" for="inputEstado1">Activo</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inputEstado" id="inputEstado2" value="0">
                  <label class="form-check-label" for="inputEstado2">Inactivo</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputDescripcion" class="col-2 col-form-label">Descripción</label>
            <div class="col-10">
              <textarea class="form-control" id="inputDescripcion" name="inputDescripcion" rows="3">{{Session::get('input')['inputDescripcion']}}</textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="inputCuerpo">Cuerpo</label>
            <textarea class="form-control" id="inputCuerpo" name="inputCuerpo" rows="12">{{Session::get('input')['inputCuerpo']}}</textarea>
          </div>
          <div class="form-group row">
            <div class="col-sm-6">
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            <div class="col-sm-6">
              <button type="submit" class="btn btn-primary float-right" onclick="window.location.href='/admin/articulos/{{$articulo->id}}'">Recursos</button>
            </div>
          </div>
        </fieldset>
      </form>
      
    </div>
@endsection
@section('javascript')
    
    <script>
      @if(Session::get('input')['inputCategoria'])
        document.getElementById("inputCategoria").querySelector("option[value='{{Session::get('input')['inputCategoria'] }}']").selected="true";
      @endif
      
      @if(isset(Session::get('input')['inputEstado']))
      
        @if( strcmp( Session::get('input')['inputEstado'],  "Activo")  == 0 )
          document.getElementById("inputEstado1").checked = "true";
        @else
          document.getElementById("inputEstado2").checked = "true";
        @endif
      @endif
      
    </script>
@endsection
