<form accept-charset="UTF-8" enctype="multipart/form-data" style="margin-top:2rem;" method="post" action="/api/admin/recursoBlog" id="guardarRecurso">
    <input type="hidden" name="articulo_id" value="{{$articulo->id}}">
    <fieldset>
        <legend>Articulo: Recursos</legend>
        <div class="form-group row">
            <div class="form-group col-12">
                <div class="custom-file col-9">
                    Enviar este fichero: <input type="file" id="fichero_articulo" name="fichero_articulo">
                </div>
                <div id="imagenes col-12">
                    @include("admin.articuloRecursos")
                </div>
            </div>
        </div>
    </fieldset>
    <div class="modal" tabindex="-1" role="dialog" id="modalPosicion">
        <input type="hidden" id="idRecurso">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ingrese la Posicion del Recurso</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <div class="form-group row">
                <div class="form-group col-12">
                  <label for="inputPosicion" class="col-2 col-form-label">Posicion</label>
                  <div class="col-5">
                    <input type="text" class="form-control" id="inputPosicion"  name="inputPosicion">
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer" id="bottonGuardar">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            <div class="modal-footer" style="display:none" id="bottonEditar">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" onclick="editarRecurso()" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</form>
<div class="form-group row">
    <div class="col-sm-10">
        <button type="submit" class="btn btn-primary" onclick="finalizar()">Finalizar</button>
    </div>
</div>
<script type="text/javascript" src={{asset('js/admin/uploadFile.js')}} charset="UTF-8"></script>
<script type="text/javascript" src={{asset('js/admin/articuloRecursosCreate.js')}} charset="UTF-8"></script>
<script>
    function finalizar(){
        {{Session::forget('articuloCreate')}}
        {{Session::forget('articuloEdit')}}
        submitForm();
    }
</script>