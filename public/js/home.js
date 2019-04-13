
document.getElementById("firstText").style="display:block";
if(screen.width>=992){
  document.getElementById("registrateButtonDesktop").style="display:block";
}else{
  document.getElementById("registrateButtonMobile").style="display:block";
}

$('#carouselExampleIndicators').bind('slide.bs.carousel', function (e) {
    if ($(this).find('.active').index()=="0") {
      document.getElementById("firstText").style="display:none";
      document.getElementById("secondText").style="display:block";
      if(screen.width>=992){
        document.getElementById("registrateButtonDesktop").style="display:none";
        document.getElementById("invertirButtonDesktop").style="display:block";
      }else{
        document.getElementById("registrateButtonMobile").style="display:none";
        document.getElementById("invertirButtonMobile").style="display:block";
      }
    }else if ($(this).find('.active').index()=="1") {
      document.getElementById("firstText").style="display:block";
      document.getElementById("secondText").style="display:none";
      if(screen.width>=992){
        document.getElementById("registrateButtonDesktop").style="display:block";
        document.getElementById("invertirButtonDesktop").style="display:none";
      }else{
        document.getElementById("registrateButtonMobile").style="display:block";
        document.getElementById("invertirButtonMobile").style="display:none";
      }
    }
});

