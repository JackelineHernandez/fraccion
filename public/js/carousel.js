if (screen.width>992){
  $(".center").slick({
    /*dots: true,*/
    infinite: true,
    centerMode: true,
    slidesToShow: 4,
    slidesToScroll: 3,
    centerPadding: '60px',
  });
}else{
  console.log("modo Mobile");
  $(".center").slick({
    /*dots: true,*/
    infinite: true,
    centerMode: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    centerPadding: '20px',
  });
}
