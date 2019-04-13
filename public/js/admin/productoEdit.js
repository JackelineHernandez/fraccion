var inputEstadoSelectAux = document.getElementById("inputEstadoSelectAux").value;
if(inputEstadoSelectAux){
    document.getElementById("inputEstadoSelect").querySelector("option[value='"+inputEstadoSelectAux+"']").selected="true";
}

var countContenidos = document.getElementById("countContenidos").value;
var productoId = document.getElementById("producto_id").value;
function siguiente(){
    if(countContenidos>0 || document.getElementById("fichero_producto").value != "")
      location.href ="/admin/caracteristicasTecnicas/create/"+productoId;
    else{
      alert("El proyecto debe tener Imagenes asociadas");
    }
  }

  function guardar(){
    if(countContenidos>0 || document.getElementById("fichero_producto").value != "")
      document.getElementById("editProducto").submit();
    else
      alert("El proyecto debe tener Imagenes asociadas");
  }