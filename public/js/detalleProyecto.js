      var cant = document.getElementById("cant").value;
      
      for(i=0; i<cant; i++){
        document.getElementById("heading"+i).addEventListener("click", function(){ 
          var clases="card-header";
          for(j=0; j<cant; j++){
            document.getElementById("heading"+j).className = clases;
          }
          this.className += " headerActive";
        });
      }

      var menuDetalleOpen=false;
      var botonMenu = document.getElementById('botonMenu');
      botonMenu.addEventListener("click",function(event){
        var cards =document.querySelectorAll(".card");
        var carousel =document.querySelectorAll("div[id='carouselCaractConten']");
        if(!menuDetalleOpen){
          for(var i=0; i<cards.length; i++){
              cards[i].style="position:inherit;";
            if(carousel[i])
              carousel[i].style="display:none";
          }
          document.getElementById("accordionCaracteristicas").style="position:inherit;";
          menuDetalleOpen=true;
        }else{
          for(var i=0; i<cards.length; i++){
            cards[i].style="position:relative";
            if(carousel[i])
              carousel[i].style="display:block";
          }
          document.getElementById("accordionCaracteristicas").style="position:relative;";
          menuDetalleOpen=false;
        }
        
      });
      
      $("#simuladorRangeValue").text(document.getElementById('simuladorRange').value);
      var spans = document.getElementsByName("simuladorRangeValue");
      for(i=0; i<spans.length; i++){
        spans[i].innerHTML=document.getElementById('simuladorRange').value;
      }

      var simulador= document.getElementsByName("simuladorRange");
      for(i=0; i<simulador.length; i++){
        simulador[i].addEventListener("change", function(e) {
          for(j=0; j<spans.length; j++){
            spans[j].innerHTML=this.value;
          }
        });
      }
      
    
    