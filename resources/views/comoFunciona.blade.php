<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="css/general.css">
   <link rel="stylesheet" type="text/css" href="css/comoFunciona.css">
    <title>Fraccion</title>
  </head>
  <body>
    <div class="container-fluid">
			@include("simpleHeader")
			<div class="row">
				<div class="col-lg-6">
					<div class="row paddingLeft bloque1">
						<div class="co-12 d-none d-lg-block">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="/">Inicio</a></li>
									<li class="breadcrumb-item active" aria-current="page">¿Cómo Funciona?</li>
								</ol>
							</nav>
						</div>
						<div class="col-12 comoFuncionaTittle">
							<span>¿Cómo Funciona?</span>
						</div>
					</div>
					<div class="row bloque2"></div>
					<div class="row bloque3"></div>
					<div class="row bloque4"></div>
				</div>
				<div class="col-lg-6" style="position:relative">
					<div class="row">
						<div class="col-12 bloque1Derecha">
							<div class="col-12 bloque1Logo" style="">
								<div class="bloque1Text">
									<span class="oval float-left">1</span>
									<div class="span1"><span>Elige un Proyecto</span></div>
									<div class="span2"><span>atractivo y rentable</span></div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 bloque2Derecha">
							<div class="col-12 bloque2Logo" style="">
								<div class="bloque2Text">
									<span class="oval float-left">2</span>
									<div class="span1"><span>Empieza a invertir</span></div>
									<div class="span2"><span>desde $5.000.000 de pesos en adelante</span></div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 bloque3Derecha">
							<div class="col-12 bloque3Logo" style="">
								<div class="bloque3Text">
									<span class="oval float-left">3</span>
									<div class="span1"><span>Revisa</span></div>
									<div class="span2"><span>el estado de tu inversión online</span></div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 bloque4Derecha">
							<div class="col-12 bloque4Logo" style="">
								<div class="bloque4Text">
									<span class="oval float-left">4</span>
									<div class="span1"><span>Recibe tus dividendos</span></div>
									<div class="span3"><span>rentabilidad esperada:<strong> 6.5%<strong></span></div>
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
			
      
      
      @include("footer")
    </div>
    <!--<script type="text/javascript" src="js/bootstrap.min.js"></script>-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script type="text/javascript" src="js/general.js"></script>
    
  </body>
</html>
