function submitForm(){
    document.getElementById("guardarRecurso").action="/admin/articulos/{{$articulo->id}}";
    document.getElementById("guardarRecurso").method="GET";
    document.getElementById("guardarRecurso").submit();
}

function abrirModal(posicion, id){
  document.getElementById("inputPosicion").value=posicion;
  document.getElementById("idRecurso").value=id;
  document.getElementById("bottonGuardar").style="display:none";
  document.getElementById("bottonEditar").style="display:block";
  $('#modalPosicion').modal("show");
}

function editarRecurso(){
  formulario = document.getElementById("guardarRecurso");
  id=document.getElementById("idRecurso").value;
  formulario.action="/api/admin/recursoBlog/"+id;
  formulario.method="post";
  newInput = document.createElement("input");
  newInput.type="hidden";
  newInput.name="_method";
  newInput.value="PUT";
  formulario.appendChild(newInput);
  newInput2 = document.createElement("input");
  newInput2.type="hidden";
  newInput2.name="_token";
  newInput2.value="{{ csrf_token() }}";
  formulario.appendChild(newInput2);
  
  formulario.submit();
  
}