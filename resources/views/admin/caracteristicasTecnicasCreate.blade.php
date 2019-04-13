@extends('admin.productoBasicInfo')

@section('caracteristicasTecnicasCreate')

  <body>
    <div class="container">
      @yield('proyetcoBasicInfo')
      <form accept-charset="UTF-8" enctype="multipart/form-data"  method="post" action="/api/admin/caracteristicasTecnicas" style="margin-top:2rem;">
        <input type="hidden" name="producto_id" value={{ $producto->id }} />
        <fieldset>
          <div class="row">
            <div class="col-6">
              <legend>Proyecto: Características Técnicas</legend>
            </div>
            <div class="col-6">
              <a id="collapseButton" class="btn btn-primary float-right" data-toggle="collapse" href="#collapseCaracteristicas" role="button" aria-expanded="false" aria-controls="collapseCaracteristicas">
                Nuevo
              </a>
            </div>
          </div>
          <div class="collapse" id="collapseCaracteristicas">
          @if ($errors->any()  && Session::get('editCaracteristica')!=true)
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
            <div class="form-group row">
              <div class="form-group col-6">
                <label for="inputNombreCarTecnica" class="col-6 col-form-label">Nombre</label>
                <div class="col-10">
                  <input type="text" class="form-control" id="inputNombreCarTecnica" name="inputNombreCarTecnica" value="{{isset(Session::get('_old_input')['inputNombreCarTecnica']) ? Session::get('_old_input')['inputNombreCarTecnica'] : ''}}">
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="form-group col-12">
                <label for="inputDescripcionCarTecnica" class="col-6 col-form-label">Descripcion</label>
                <div class="col-10">
                  <textarea class="form-control" id="inputDescripcionCarTecnica" rows="3" name="inputDescripcionCarTecnica">{{isset(Session::get('_old_input')['inputDescripcionCarTecnica']) ? Session::get('_old_input')['inputDescripcionCarTecnica'] : ''}}</textarea>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="form-group col-6">
                <legend class="col-form-label col-2 pt-0">Visibilidad</legend>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="customRadioInline1" name="customRadioVisible" class="custom-control-input" value=true>
                  <label class="custom-control-label" for="customRadioInline1">Visible</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="customRadioInline2" name="customRadioVisible" class="custom-control-input" value=false>
                  <label class="custom-control-label" for="customRadioInline2">No Visible</label>
                </div>
              </div>
              <div class="form-group col-6">
                <label for="inputOrdenCarTecnica" class="col-12 col-form-label">Orden</label>
                <div class="col-10">
                  <input type="text" class="form-control" id="inputOrdenCarTecnica" name="inputOrdenCarTecnica" value="{{isset(Session::get('_old_input')['inputOrdenCarTecnica']) ? Session::get('_old_input')['inputOrdenCarTecnica'] : ''}}">
                </div>
              </div>
            </div>
            <fieldset>
              <legend>Caracteristicas: Contenidos</legend>
              <div class="form-group row">
                <div class="form-group col-12">
                  <div class="custom-file">
                    Enviar este fichero: <input type="file" id="fichero_caracteristica" name="fichero_caracteristica[]" multiple="">
                  </div>
                  <div id="imagenes">
                    <div id="carouselContendioCaracteristica" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner" id="carousel-contenido-caracteristica">

                      </div>
                      <a class="carousel-control-prev" href="#carouselContendioCaracteristica" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselContendioCaracteristica" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </fieldset>
            <div class="form-group row">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
            </div>
          </div>
        </fieldset>
      </form>
    </div>
    @include('admin.caracteristicasTecnicas')
@endsection
@section('javascript')
    <script type="text/javascript" src={{asset('js/admin/uploadFile.js')}} charset="UTF-8"></script>
    <script type="text/javascript" src={{asset('js/admin/caracteristicasTecnicasCreate.js')}} charset="UTF-8"></script>
    @if ($errors->any() && Session::get('editCaracteristica')!=true)
      <script> collapseCaracteristicasBlock();</script>
      @if(isset(Session::get('_old_input')['customRadioVisible']) && Session::get('_old_input')['customRadioVisible']=="true")
        <script>customRadioInline1Active();</script>  
      @elseif(isset(Session::get('_old_input')['customRadioVisible']) && Session::get('_old_input')['customRadioVisible']=="false")
        <script> customRadioInline2Active();</script>  
      @endif
    @endif
    @if ($errors->any() && Session::get('editCaracteristica')==true)
      <script>caracTecnicaEditShow({{Session::get('editCaracteristicaId')}});</script>
    @endif
@endsection

