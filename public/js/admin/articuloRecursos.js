function eliminar(id)
  {
    formulario = document.getElementById("guardarRecurso");
    formulario.action="/api/admin/recursoBlog/"+id;
    formulario.method="post";
    newInput = document.createElement("input");
    newInput.type="hidden";
    newInput.name="_method";
    newInput.value="DELETE";
    formulario.appendChild(newInput);
    newInput2 = document.createElement("input");
    newInput2.type="hidden";
    newInput2.name="_token";
    newInput2.value="{{ csrf_token() }}";
    formulario.appendChild(newInput2);
    
    formulario.submit();
    
  }