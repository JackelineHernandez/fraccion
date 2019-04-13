document.getElementsByClassName("contactMenu")[0].style="display:none !important";
var menuOpen=false;
var botonMenu = document.getElementById('botonMenu');
botonMenu.addEventListener("click",function(event){
  if(!menuOpen){
    document.getElementById("header").style="background-color:white;";
    document.getElementsByClassName("contactMenu")[0].style="display: flex";
    color="#003a5d";
    menuOpen=true;
  }else{
    document.getElementById("header").style="background-color:none";
    document.getElementsByClassName("contactMenu")[0].style="display: none !important";
    color="white";
    menuOpen=false;
  }
  menuItems=document.querySelectorAll(".menuItem");
  for(var i=0; i<menuItems.length; i++){
    menuItems[i].style="color:"+color+" !important;";
  }
})
