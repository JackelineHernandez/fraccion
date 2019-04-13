<div class="row" id="academiaBlock" >
	<div class="col-12 col-lg-5 academiaTitle">
		<div class="col-12 col-offset-0 col-lg-10 offset-lg-2 d-flex justify-content-center iconoAcademia d-flex align-items-center">
			<span>Academia</span>
		</div>
		<div class="col-12 col-offset-0 col-lg-10 offset-lg-2 d-flex justify-content-end mt-4"><a href="/articulos"><span>Ver todos los artículos de la academia</span>         <img src="svg/arrowRightIcoWhite.svg"></a></div>
	</div>
	<div class="col-12 col-lg-7 colAcademiaArt d-flex align-items-end">
		<div class="row firstNotice">
			<div class="col-12 offset-0 col-lg-8 offset-lg-4">
				<div class="col-12">
					<span>Noticia</span>
				</div>
				<div class="col-12">
					<span>{{$articulo->fecha_creacion}}</span>
				</div>
				<div class="col-12">
					<h2>{{$articulo->titulo}}</h2>
				</div>
				<div class="col-12">
					<span><a href="/articulos/{{$articulo->id}}"><span>Ver más</span>         <img src="svg/arrowRightIcoBlue.svg"></a></span>
				</div>
			</div>
		</div>
	</div>
</div>
