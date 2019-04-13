@extends('admin.home')

@section('css')
  <link rel="stylesheet" media="screen" href="{{asset('datetimepicker/css/bootstrap-datetimepicker.min.css')}}">
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
      <form accept-charset="UTF-8" enctype="multipart/form-data" style="margin-top:2rem;" method="POST" action="/api/admin/productos/{{$producto->id}}" id="editProducto">
        {{ method_field('PUT') }}  
        <fieldset>
          <legend>Proyecto: Información General</legend>
          <div class="form-group row">
            <div class="form-group col-6">
              <label for="inputNombre" class="col-2 col-form-label">Nombre</label>
              <div class="col-10">
                <input type="text" class="form-control" id="inputNombre"  name="inputNombre" placeholder="Nombre Proyecto" value="{{Session::get('input')['inputNombre']}}">
              </div>
            </div>
            <div class="form-group col-6">
              <label for="inputEstadoSelect" class="col-6 col-form-label">Estado</label>
              <div class="col-10">
                <select class="form-control" id="inputEstadoSelect" name="inputEstadoSelect">
                <option value="0">Seleccione</option>
                  @foreach($estados as $estado)
                    <option value="{{$estado->id}}">{{$estado->estado}}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputDescripcion" class="col-2 col-form-label">Descripción</label>
            <div class="col-10">
              <textarea class="form-control" id="inputDescripcion" name="inputDescripcion" rows="3">{{Session::get('input')['inputDescripcion']}}</textarea>
            </div>
          </div>
          <div class="form-group row">
            <div class="form-group col-6">
              <label for="inputFechaInicio" class="col-12 control-label">Fecha de Inicio</label>
              <div class="input-group date form_date col-12" data-date="" data-date-format="yyyy mm dd" data-link-field="inputFechaInicio" data-link-format="yyyy-mm-dd" id='fechaInicio'>
                <input type="text" value="{{$producto->fecha_inicio}}" readonly id="showFechaInicio">
                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
              </div>
			        <input type="hidden" id="inputFechaInicio" name="inputFechaInicio" value="{{Session::get('input')['inputFechaInicio']}}" /><br/>
            </div>
            <div class="form-group col-6">
              <label for="inputFechaVencimiento" class="col-12 control-label">Fecha de Vencimiento</label>
              <div class="input-group date form_date col-12" data-date="" data-date-format="yyyy mm dd" data-link-field="inputFechaVencimiento" data-link-format="yyyy-mm-dd" id='fechaVenc'>
                <input type="text" value="{{$producto->fecha_vencimiento}}" readonly id="showFechaVencimiento">
                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
              </div>
			        <input type="hidden" id="inputFechaVencimiento" name="inputFechaVencimiento" value="{{Session::get('input')['inputFechaVencimiento']}}" /><br/>
            </div>
          </div>
          <div class="form-group row">
            <div class="form-group col-6">
              <label for="inputInversionMax" class="col-6 col-form-label">Maxima Inversión</label>
              <div class="col-10">
                <input type="text" class="form-control" id="inputInversionMax" name="inputInversionMax" value="{{Session::get('input')['inputInversionMax']}}">
              </div>
            </div>
            <div class="form-group col-6">
              <label for="inputInversionMin" class="col-6 col-form-label">Mínima Inversión</label>
              <div class="col-10">
                <input type="text" class="form-control" id="inputInversionMin" name="inputInversionMin" value="{{Session::get('input')['inputInversionMin']}}">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="form-group col-6">
              <label for="inputInversionistasMax" class="col-6 col-form-label">Máximo de Inversionistas</label>
              <div class="col-10">
                <input type="text" class="form-control" id="inputInversionistasMax" name="inputInversionistasMax" value="{{Session::get('input')['inputInversionistasMax']}}">
              </div>
            </div>
            <div class="form-group col-6">
              <label for="inputInversionistasMin" class="col-6 col-form-label">Mínimo de Inversionistas</label>
              <div class="col-10">
                <input type="text" class="form-control" id="inputInversionistasMin" name="inputInversionistasMin" value="{{Session::get('input')['inputInversionistasMin']}}">
              </div>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>Proyecto: Ubicación</legend>
          <div class="form-group row">
            <label for="inputDireccion" class="col-2 col-form-label">Dirección</label>
            <div class="col-10">
              <textarea class="form-control" id="inputDireccion" name="inputDireccion" rows="1">{{Session::get('input')['inputDireccion']}}</textarea>
            </div>
          </div>
          <div class="form-group row">
            <div class="form-group col-6">
              <label for="inputLatitud" class="col-6 col-form-label">Latitud</label>
              <div class="col-10">
                <input type="text" class="form-control" id="inputLatitud" name="inputLatitud" value="{{Session::get('input')['inputLatitud']}}">
              </div>
            </div>
            <div class="form-group col-6">
              <label for="inputLongitud" class="col-6 col-form-label">Longitud</label>
              <div class="col-10">
                <input type="text" class="form-control" id="inputLongitud" name="inputLongitud" value="{{Session::get('input')['inputLongitud']}}">
              </div>
            </div>
          </div>
        </fieldset>

        <fieldset>
          <legend>Proyecto: Características Financieras</legend>
          <div class="form-group row">
            <div class="form-group col-6">
              <label for="inputRentabilidadAnual" class="col-6 col-form-label">Rentabilidad Anual</label>
              <div class="col-10">
                <input type="text" class="form-control" id="inputRentabilidadAnual" name="inputRentabilidadAnual" value="{{Session::get('input')['inputRentabilidadAnual']}}">
              </div>
            </div>
            <div class="form-group col-6">
              <label for="inputRentabilidadMensual" class="col-6 col-form-label">Rentabilidad Mensual</label>
              <div class="col-10">
                <input type="text" class="form-control" id="inputRentabilidadMensual" name="inputRentabilidadMensual" value="{{Session::get('input')['inputRentabilidadMensual']}}">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="form-group col-4">
              <label for="inputPlazoMeses" class="col-12 col-form-label">Plazo en Meses</label>
              <div class="col-10">
                <input type="text" class="form-control" id="inputPlazoMeses" name="inputPlazoMeses" value="{{Session::get('input')['inputPlazoMeses']}}">
              </div>
            </div>
            <div class="form-group col-4">
              <label for="inputObjetivoFinanciacion" class="col-12 col-form-label">Objetivo de Financiación</label>
              <div class="col-10">
                <input type="text" class="form-control" id="inputObjetivoFinanciacion" name="inputObjetivoFinanciacion" value="{{Session::get('input')['inputObjetivoFinanciacion']}}">
              </div>
            </div>
            <div class="form-group col-4">
              <label for="inputBeneficioOperacion" class="col-12 col-form-label">Beneficio de Operación</label>
              <div class="col-10">
                <input type="text" class="form-control" id="inputBeneficioOperacion" name="inputBeneficioOperacion" value="{{Session::get('input')['inputBeneficioOperacion']}}">
              </div>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>Proyecto: Contenidos</legend>
          <div class="form-group row">
            <div class="form-group col-12">
              <div class="custom-file">
                Enviar este fichero: <input type="file" id="fichero_producto" name="fichero_producto[]" multiple="">
              </div>
              <div id="imagenes">
                @include('admin.contenidosProducto')
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-6">
              <button type="button" class="btn btn-primary" onclick="guardar()">Guardar</button>
            </div>
            <div class="col-sm-6">
              <button type="button" class="btn btn-primary float-right" onclick="siguiente()">Características Tecnicas</button>
            </div>
          </div>
        </fieldset>
      </form>
      <input type="hidden" id="inputEstadoSelectAux" value={{Session::get('input')['inputEstadoSelect']}}>
      <input type="hidden" id="countContenidos" value={{count($producto->contenidos)}}>
      <input type="hidden" id="producto_id" value={{$producto->id}}>

@endsection
@section('javascript')
    <script type="text/javascript" src={{asset('datetimepicker/js/bootstrap-datetimepicker.min.js')}} charset="UTF-8"></script>

    <script type="text/javascript" src={{asset('datetimepicker/js/bootstrap-datetimepicker.js')}} charset="UTF-8"></script>
    <script type="text/javascript" src={{asset('datetimepicker/js/locales/bootstrap-datetimepicker.es.js')}} charset="UTF-8"></script>
    <script type="text/javascript" src={{asset('moment/moment.js')}}></script>
    <script type="text/javascript" src={{asset('datetimepicker/js/general.js')}} charset="UTF-8"></script>

    <script type="text/javascript" src={{asset('js/admin/uploadFile.js')}} charset="UTF-8"></script>
    <script type="text/javascript" src={{asset('js/admin/productoEdit.js')}} charset="UTF-8"></script>
@endsection
