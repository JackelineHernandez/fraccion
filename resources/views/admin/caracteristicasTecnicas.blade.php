
<?php if($producto->caracteristicasTecnicas->isNotEmpty()) {                          ?>
          <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Orden</th>
                <th scope="col">Visible</th>
                <th scope="col">Accion</th>
              </tr>
            </thead>
            <tbody>
<?php         $i=0;
              foreach ($producto->caracteristicasTecnicas as $carTecnica) {                          ?>
                <tr>
                  <th scope="row">{{$i}}</th>
                  <td>{{$carTecnica->nombre}}</td>
                  <td>{{$carTecnica->orden}}</td>
                  <td>{{$carTecnica->visible}}</td>
                  <td>
                    <a href="#" data-toggle="modal" data-target="#caracTecnicaDetalle{{$carTecnica->id}}">Ver</a> |
                    <form method="POST" id="delete{{$carTecnica->id}}" action="/api/admin/caracteristicasTecnicas/{{$carTecnica->id}}">{{ csrf_field() }}{{ method_field('DELETE') }}<a href="#" onclick="eliminar({{$carTecnica->id}})">Eliminar</a> </form> |
                    <a href="#" data-toggle="modal" data-target="#caracTecnicaEdit{{$carTecnica->id}}">Editar</a>
                  </td>
                </tr>
                <!-- Modal Ver-->
                <div class="modal fade" id="caracTecnicaDetalle{{$carTecnica->id}}" tabindex="-1" role="dialog" aria-labelledby="caracTecnicaDetalleLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="caracTecnicaDetalleLabel">{{$carTecnica->nombre}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="container-fluid">
                          <div class="row">
                            <span class="col-4"><strong>Descripción:</strong></span>
                            <span class="col-8">{{$carTecnica->descripcion}}</span>
                          </div>
                          <div class="row">
                            <span class="col-3"><strong>Visble:</strong></span>
                            <span class="col-3">{{$carTecnica->visible}}</span>
                            <span class="col-3"><strong>Orden:</strong></span>
                            <span class="col-3">{{$carTecnica->orden}}</span>
                          </div>
                          <div class="row">
                            <div class="col-12">
                              <?php //echo "<script>console.log('Carac ".$carTecnica->nombre."'); console.log(".$carTecnica->contenidos.")</script>" ?>
                              @include('admin.contenidosCaracteristica')
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Editar</button>
                        <button type="button" class="btn btn-primary">Eliminar</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal Editar-->
                <div class="modal fade" id="caracTecnicaEdit{{$carTecnica->id}}" tabindex="-1" role="dialog" aria-labelledby="caracTecnicaEditLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="caracTecnicaEditLabel">{{$carTecnica->nombre}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form accept-charset="UTF-8" id="editarCarac" enctype="multipart/form-data"  method="POST" action="/api/admin/caracteristicasTecnicas/{{$carTecnica->id}}" style="margin-top:2rem;">
                          {{ method_field('PUT') }}  
                          <input type="hidden" name="producto_id" value={{ $producto->id }} />
                          <input type="hidden" id="carcteristicaTecnica{{ $carTecnica->id }}" name="id" value={{ $carTecnica->id }} />
                          @if ($errors->any() && Session::get('editCaracteristicaId')==$carTecnica->id)
                              <div class="alert alert-danger">
                                  <ul>
                                      @foreach ($errors->all() as $error)
                                          <li>{{ $error }}</li>
                                      @endforeach
                                  </ul>
                              </div>
                          @endif
                          <?php //dd(Session::get('input'));?>
                          <div class="form-group row">
                            <div class="form-group col-6">
                              <label for="inputNombreCarTecnica" class="col-6 col-form-label">Nombre</label>
                              <div class="col-10">
                                <input type="text" class="form-control" id="inputNombreCarTecnicaEdit" name="inputNombreCarTecnicaEdit" value="{{$carTecnica->nombre}}">
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="form-group col-12">
                              <label for="inputDescripcionCarTecnica" class="col-6 col-form-label">Descripcion</label>
                              <div class="col-10">
                                <textarea class="form-control" id="inputDescripcionCarTecnicaEdit" rows="3" name="inputDescripcionCarTecnicaEdit">{{$carTecnica->descripcion}}</textarea>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="form-group col-6">
                              <legend class="col-form-label col-2 pt-0">Visibilidad</legend>
                              <input type="hidden" id="visible" value={{$carTecnica->visible}} />
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1Edit{{$carTecnica->id}}" name="customRadioVisibleEdit" class="custom-control-input" value=true>
                                <label class="custom-control-label" for="customRadioInline1Edit{{$carTecnica->id}}">Visible</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2Edit{{$carTecnica->id}}" name="customRadioVisibleEdit" class="custom-control-input" value=false>
                                <label class="custom-control-label" for="customRadioInline2Edit{{$carTecnica->id}}">No Visible</label>
                              </div>
                            </div>
                            <div class="form-group col-6">
                              <label for="inputOrdenCarTecnica" class="col-12 col-form-label">Orden</label>
                              <div class="col-10">
                                <input type="text" class="form-control" id="inputOrdenCarTecnicaEdit" name="inputOrdenCarTecnicaEdit" value="{{$carTecnica->orden}}">
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="form-group col-12">
                              <div class="custom-file">
                                Enviar este fichero: <input type="file" id="fichero_caracteristicaEdit{{$carTecnica->id}}" name="fichero_caracteristicaEdit[]" multiple="">
                              </div>
                              <div id="imagenesEdit{{$carTecnica->id}}">
                                @include('admin.contenidosCaracteristica')
                              </div>
                            </div>
                          </div>
                          <div class="form-group row modal-footer">
                            <div class="col-sm-12">
                              <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
<?php           $i++;
              }                                                                                      ?>
            </tbody>
          </table>
        </div>
<?php }                                                                                               ?>

<script type="text/javascript" src={{asset('js/admin/uploadFile.js')}} charset="UTF-8"></script>
<script type="text/javascript" src={{asset('js/admin/caracteristicasTecnicas.js')}} charset="UTF-8"></script>
<script>
  
  @for($i = 0; $i < count($producto->caracteristicasTecnicas); $i++)
    @if($producto->caracteristicasTecnicas[$i]->visible)
      document.getElementById("customRadioInline1Edit{{$producto->caracteristicasTecnicas[$i]->id}}").checked="true";
    @else
      document.getElementById("customRadioInline2Edit{{$producto->caracteristicasTecnicas[$i]->id}}").checked="true";
    @endif
  @endfor

</script>
