<div class="row">
  <div class="col-12 header">
    <div class="row align-items-center headerRow" id="header">
      <div class="col-9 col-lg-3 logo d-flex align-content-center">
        <nav class="navbar navbar-light d-lg-none">
          <button class="navbar-toggler" id="botonMenu" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <img id="logoHamburguesa" src="{{asset('svg/hamburguesaIco.svg')}}">
          </button>
        </nav>
        <a href="/" style="height:auto; width:100%"></a>
      </div>
      <div class="col-3 col-lg-2 miCuenta order-lg-3">
        <nav class="navbar navbar-expand-lg justify-content-center navbar-dark">
          <a class="nav-item nav-link text-white" href="#">
            <img class="pr-2"src="{{asset('svg/userIco.svg')}}"/>
            <span class="float-right d-none d-lg-block .d-xl-none">  Mi Cuenta</span>
          </a>
        </nav>
      </div>
      <div class="col-12 col-lg-7 menu order-lg-2">
        <nav class="navbar navbar-expand-lg">
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-item nav-link menuItem text-lg-center" href="/"><span>Inicio</span> <img src="{{asset('svg/arrowRightIcoBlue.svg')}}" class="float-right d-lg-none"></a>
              <a class="nav-item nav-link menuItem text-lg-center" href="/comoFunciona"><span>¿Cómo Funciona?</span> <img src="{{asset('svg/arrowRightIcoBlue.svg')}}" class="float-right d-lg-none"></a>
              <a class="nav-item nav-link menuItem text-lg-center" href="/proyectos"><span>Proyectos</span><img src="{{asset('svg/arrowRightIcoBlue.svg')}}" class="float-right d-lg-none"></a>
              <a class="nav-item nav-link menuItem text-lg-center" href="#"><span>Fraccionarios</span><img src="{{asset('svg/arrowRightIcoBlue.svg')}}" class="float-right d-lg-none"></a>
              <a class="nav-item nav-link menuItem text-lg-center" href="/articulos"><span>Academia</span><img src="{{asset('svg/arrowRightIcoBlue.svg')}}" class="float-right d-lg-none"></a>
              <a class="nav-item nav-link menuItem text-lg-center" href="/#"><span>FAQs</span><img src="{{asset('svg/arrowRightIcoBlue.svg')}}" class="float-right d-lg-none"></a>
            </div>
          </div>
        </nav>
        <div class="contactMenu d-lg-none d-flex align-items-center d-flex justify-content-center">
          <img class="float-left" src="{{asset('svg/whatsappIco.svg')}}">
          <div class="float-right">
            <p class="card-text text-center">Habla con nosotros</p>
            <h4 class="card-title text-center">310 414 5785</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
      