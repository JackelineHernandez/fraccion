  
  var editModals=document.querySelectorAll("input[id*='carcteristicaTecnica'");
  for(var i=0; i<editModals.length; i++){
    document.querySelector("div[id='imagenesEdit"+editModals[i].value+"'] div").id="carouselContenidoCaracteristicasEdit"+editModals[i].value;
    
    var buttons = document.querySelectorAll("div[id='imagenesEdit"+editModals[i].value+"'] div a");
    for(var j=0; j<buttons.length; j++){
      buttons[j].href="#carouselContenidoCaracteristicasEdit"+editModals[i].value;
    }
    document.querySelector("div[id='imagenesEdit"+editModals[i].value+"'] div div").id="carousel-contenido-caracteristica-edit-"+editModals[i].value;

    bloqueEliminar = document.querySelectorAll("div[id='imagenesEdit"+editModals[i].value+"'] div div div[id^='eliminarContenido']");
    console.log(bloqueEliminar);
    if(bloqueEliminar != null){
      for(var j=0; j<bloqueEliminar.length; j++){
        bloqueEliminar[j].style="display:block !important";
      }
    }
  }
  
  function eliminar(id)
  {
    document.getElementById("delete"+id).submit();
  }