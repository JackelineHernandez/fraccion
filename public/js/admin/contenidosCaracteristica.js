function eliminarContenido(id, caracteristica)
  {
    formulario = document.getElementById("editarCarac");
    formulario.action="/api/admin/caracteristicaContenido/"+id;
    formulario.method="post";
    
    newInput = document.createElement("input");
    newInput.type="hidden";
    newInput.name="caracteristica_id";
    newInput.value=caracteristica;
    formulario.appendChild(newInput);

    newInput1=document.getElementsByName("_method");
    newInput1[0].value="DELETE";
    
    newInput2 = document.createElement("input");
    newInput2.type="hidden";
    newInput2.name="_token";
    newInput2.value="{{ csrf_token() }}";
    formulario.appendChild(newInput2);
    
    formulario.submit();
    
  }