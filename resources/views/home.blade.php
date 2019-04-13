<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/general.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <title>Fraccion</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 fondo">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" id="carousel-item1"></div>
              <div class="carousel-item" id="carousel-item2"></div>
            </div>
          </div>
        </div>
        <div class="col-12 header">
          <div class="row align-items-center headerRow" id="header">
            <div class="col-9 col-lg-3 logo d-flex align-content-center">
              <nav class="navbar navbar-light d-lg-none">
                <button class="navbar-toggler" id="botonMenu" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <img src="svg/hamburguesaIco.svg">
                </button>
              </nav>
            </div>
            <div class="col-2 offset-1 col-lg-2 offset-lg-0 miCuenta order-lg-3">
              <nav class="navbar navbar-expand-lg justify-content-center navbar-dark">
                <a class="nav-item nav-link text-white" href="#">
                  <img class="pr-2"src="svg/userIco.svg"/>
                  <span class="float-right d-none d-lg-block .d-xl-none">  Mi Cuenta</span>
                </a>
              </nav>
            </div>
            <div class="col-12 col-lg-7 menu order-lg-2">
              <nav class="navbar navbar-expand-lg">
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                    <a class="nav-item nav-link menuItem text-lg-center" href="/"><span>Inicio</span> <img src="svg/arrowRightIcoBlue.svg" class="float-right d-lg-none"></a>
                    <a class="nav-item nav-link menuItem text-lg-center" href="/comoFunciona"><span>¿Cómo Funciona?</span> <img src="svg/arrowRightIcoBlue.svg" class="float-right d-lg-none"></a>
                    <a class="nav-item nav-link menuItem text-lg-center" href="/proyectos"><span>Proyectos</span><img src="svg/arrowRightIcoBlue.svg" class="float-right d-lg-none"></a>
                    <a class="nav-item nav-link menuItem text-lg-center" href="#"><span>Fraccionarios</span><img src="svg/arrowRightIcoBlue.svg" class="float-right d-lg-none"></a>
                    <a class="nav-item nav-link menuItem text-lg-center" href="/articulos"><span>Academia</span><img src="svg/arrowRightIcoBlue.svg" class="float-right d-lg-none"></a>
                    <a class="nav-item nav-link menuItem text-lg-center" href="/#"><span>FAQs</span><img src="svg/arrowRightIcoBlue.svg" class="float-right d-lg-none"></a>
                  </div>
                </div>
              </nav>
              <div class="contactMenu d-lg-none d-flex align-items-center d-flex justify-content-center">
                <img class="float-left" src="svg/whatsappIco.svg">
                <div class="float-right">
                  <p class="card-text text-center">Habla con nosotros</p>
                  <h4 class="card-title text-center">310 414 5785</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="row align-items-center headerRow">
            <div class="col-4 offset-8 col-lg-2 offset-lg-0 order-1 order-lg-1">
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
            </div>
            <div class="col-12 col-lg-4 offset-lg-4 order-3 order-lg-2" id="principalBlock">
              <div class="card principalCard">
                <div class="card-body">
                  <div class="col-lg-12 principalCard-tittle">
                    <h4 id="firstText" class="card-title" style="display:none">Porque sabemos que el dinero no crece en los árboles, te proponemos invertirlo en Crowdfunding Constructor</br></br>Regístrate y accede a nuestro contenido gratuito</h4>
                    <h2 id="secondText" class="card-title" style="display:none" >Inversión Inmobiliaria con rentabilidad hasta del 6.5%</h2>
                  </div>
                  <div class="col-lg-12" id="registrateButtonDesktop" style="display:none">
                    <a href="/registro" class="btn btn-primary btn-block btn-lg principalCard-btn"><span class="align-middle">Regístrate</span></a>
                  </div>
                  <div class="col-lg-12" id="invertirButtonDesktop" style="display:none">
                    <a href="/proyectos" class="btn btn-primary btn-block btn-lg principalCard-btn"><span class="align-middle">¡Comienza a invertir ya!</span></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-4 offset-8 col-lg-2 offset-lg-0 order-2 order-lg-3">
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <div class="col-12 principalCard-btn-col order-4" id="registrateButtonMobile" style="display:none">
              <a href="/registro" class="btn btn-primary btn-block btn-lg blue-btn"><span class="align-middle">Regístrate</span></a>
            </div>
            <div class="col-12 principalCard-btn-col order-4" id="invertirButtonMobile" style="display:none">
              <a href="/proyectos" class="btn btn-primary btn-block btn-lg blue-btn"><span class="align-middle">¡Comienza a invertir ya!</span></a>
            </div>
          </div>
        </div>
      </div>
      @include("homeBeneficios")
      @include("homeCalculadora")
      @include("homeAcademia")
      @include("homeTestimonios")
      @include("homeAliados")
      @include("footer")
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/home.js"></script>
    <script type="text/javascript" src="js/general.js"></script>
    <script type="text/javascript" src="js/calculadora.js"></script>
    <!--Carrousel-->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script type="text/javascript" src="js/carousel.js"></script>



  </body>
</html>
