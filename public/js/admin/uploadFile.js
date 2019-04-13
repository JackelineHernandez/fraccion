var contador, carousel, carEdit;

if ( document.getElementById( "fichero_producto" )) {
    document.getElementById("fichero_producto").addEventListener("change", function(e){
    contador=0;
    carousel="producto";
    subir=true;
    for(var i=0; i<e.target.files.length; i++){
      var file = e.target.files[i];
      if(file.size>2097152){
        document.getElementById("fichero_producto").value="";
        alert("El tamaño de los archivos no debe ser mayor a 2Mb");
        subir=false;
        break;
      }
      if(file.type.match(/video.*/)){
        document.getElementById("fichero_producto").value="";
        alert("Solo se permiten Imágenes. Puede Ingresar Videos en las Características Tecnicas");
        subir=false;
        break;
      }
    }
    
    if(subir==true){
      document.getElementById("carousel-contenido-producto").innerHTML="";
      addImage(e);
    }
    //document.getElementById("guardarContenido").submit();
  });
}

if ( document.getElementById( "fichero_caracteristica" )) {
    document.getElementById("fichero_caracteristica").addEventListener("change", function(e){
    contador=0;
    carousel="caracteristica";
    subir=true;
    for(var i=0; i<e.target.files.length; i++){
      var file = e.target.files[i];
      if(file.size>2097152){
        document.getElementById("fichero_caracteristica").value="";
        alert("El tamaño de los archivos no debe ser mayor a 2Mb");
        subir=false;
        break;
      }
    }
    if(subir==true){
      document.getElementById("carousel-contenido-caracteristica").innerHTML="";
      addImage(e);
    }
  });
}

if ( document.getElementById( "fichero_articulo" )) {
  document.getElementById("fichero_articulo").addEventListener("change", function(e){
    /*contador=0;
    carousel="articulo";
    console.log("subir archivo");*/
    var file = e.target.files[i];
    if(file.size<2097152){
      $('#modalPosicion').modal("show");
    }else{
      document.getElementById("fichero_articulo").value="";
      alert("El tamaño de los archivos no debe ser mayor a 2Mb");
    }
    //document.getElementById("guardarRecurso").submit();
  });
}


var editModals=document.querySelectorAll("input[id*='carcteristicaTecnica'");
  for(var i=0; i<editModals.length; i++){
    if ( document.getElementById( "fichero_caracteristicaEdit"+editModals[i].value )) {
      document.getElementById("fichero_caracteristicaEdit"+editModals[i].value).addEventListener("change", function(e){
        //carEdit=editModals[i].value;
        console.log(e.target.id);
        console.log(e.target.id.split("fichero_caracteristicaEdit")[1]);
        carEdit=e.target.id.split("fichero_caracteristicaEdit")[1];
        contador=0;
        carousel="caracteristicaEdit";
        for(var j=0; j<e.target.files.length; j++){
          var subir=true;
          var file = e.target.files[j];
          if(file.size>2097152){
            document.getElementById("fichero_caracteristicaEdit"+carEdit).value="";
            alert("El tamaño de los archivos no debe ser mayor a 2Mb");
            subir=false;
            break;
          }
        }
        if(subir==true){
          document.getElementById("carousel-contenido-caracteristica-edit-"+carEdit).innerHTML="";
          console.log(document.getElementById("carousel-contenido-caracteristica-edit-"+carEdit));
          addImage(e);
        }
      });
    }
  }

function addImage(e){
  for(var i=0; i<e.target.files.length; i++){

    var file = e.target.files[i];
    console.log(file);
    imageType = /image.*/;
    videoType = /video.*/;


    if (!file.type.match(imageType) && !file.type.match(videoType) )
     return;

    var reader = new FileReader();
    console.log("voy por "+contador);
    reader.onload = fileOnload;
    reader.readAsDataURL(file);
  }
}

function fileOnload(e) {
  var result=e.target.result;
  console.log("voy por "+contador);
  console.log(result);
  newCarouselItem=document.createElement("div");
  if(contador==0)
    newCarouselItem.className ="carousel-item active";
  else
    newCarouselItem.className ="carousel-item";
  newImagen = document.createElement("img");
  newVideo = document.createElement("video");
  newVideo.controls="true";
  if(carousel=="producto"){
    newImagen.id="imgProducto"+contador;
    newImagen.className ="d-block w-100"
    newCarouselItem.appendChild(newImagen);
    contenedor=document.getElementById("carousel-contenido-producto");
    contenedor.appendChild(newCarouselItem);
    $('#imgProducto'+contador).attr("src",result);
  }else if(carousel=="caracteristicaEdit"){
    if(result.match("image/")){
      newImagen.id="imgCaracteristicaEdit"+contador;
      newImagen.className ="d-block w-100"
      newCarouselItem.appendChild(newImagen);
      contenedor=document.getElementById("carousel-contenido-caracteristica-edit-"+carEdit);
      contenedor.appendChild(newCarouselItem);
      $('#imgCaracteristicaEdit'+contador).attr("src",result);
    }else if(result.match("video/")){
      newVideo.id="videoCaracteristicaEdit"+contador;
      //newVideo.className ="d-block w-100"
      newCarouselItem.appendChild(newVideo);
      contenedor=document.getElementById("carousel-contenido-caracteristica-edit-"+carEdit);
      contenedor.appendChild(newCarouselItem);
      $('#videoCaracteristicaEdit'+contador).attr("src",result);
    }
  }else if(carousel=="articulo"){
    if(result.match("image/")){
      newImagen.id="imgArticulo"+contador;
      newImagen.className ="d-block w-100"
      newCarouselItem.appendChild(newImagen);
      contenedor=document.getElementById("carousel-recurso-articulo");
      contenedor.appendChild(newCarouselItem);
      $('#imgArticulo'+contador).attr("src",result);
    }else if(result.match("video/")){
      newVideo.id="videoArticulo"+contador;
      //newVideo.className ="d-block w-100"
      newCarouselItem.appendChild(newVideo);
      contenedor=document.getElementById("carousel-recurso-articulo");
      contenedor.appendChild(newCarouselItem);
      $('#videoArticulo'+contador).attr("src",result);
    }
  }else{
    if(result.match("image/")){
      newImagen.id="imgCaracteristica"+contador;
      newImagen.className ="d-block w-100"
      newCarouselItem.appendChild(newImagen);
      contenedor=document.getElementById("carousel-contenido-caracteristica");
      contenedor.appendChild(newCarouselItem);
      $('#imgCaracteristica'+contador).attr("src",result);
    }else if(result.match("video/")){
      newVideo.id="videoCaracteristica"+contador;
      newVideo.className ="d-block w-100"
      newCarouselItem.appendChild(newVideo);
      contenedor=document.getElementById("carousel-contenido-caracteristica");
      contenedor.appendChild(newCarouselItem);
      $('#videoCaracteristica'+contador).attr("src",result);
    }
    
  }
  contador++;
}
