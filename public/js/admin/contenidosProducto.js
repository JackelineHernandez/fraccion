function eliminar(id, producto)
  {
    formulario = document.getElementById("editProducto");
    formulario.action="/api/admin/contenidoProducto/"+id;
    formulario.method="post";
    
    
    newInput = document.createElement("input");
    newInput.type="hidden";
    newInput.name="producto_id";
    newInput.value=producto;
    formulario.appendChild(newInput);
    
    newInput1 = document.createElement("input");
    newInput1.type="hidden";
    newInput1.name="_method";
    newInput1.value="DELETE";
    formulario.appendChild(newInput1);

    newInput2 = document.createElement("input");
    newInput2.type="hidden";
    newInput2.name="_token";
    newInput2.value="{{ csrf_token() }}";
    formulario.appendChild(newInput2);
    
    formulario.submit();
    
  }