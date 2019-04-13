
<div class="card cardSimulador">
	<div class="card-body">
		<div class="col-12 d-lg-none">
			<h2 class="simulador">¿Cuanto Quieres Invertir?</h2>
		</div>
		<div class="col-12 d-none d-lg-block simuladorLineaDesktop">
			<div class="row">
				<div class="col-7 proyectoInicialInfo">
					<h5 class="card-title simuladorText1">¿Cuanto Quieres Invertir?</h5>
				</div>
				<div class="col-5 plazoInversion">
					<span>Plazo de Inversión</span>
					<h5>{{$producto->caracteristicasFinancieras->plazo_meses}} meses</h5>
				</div>
			</div>
		</div>
		<div class="col-12">
			<span id="simuladorRangeLabel" class="simuladorValue">$ <span id="simuladorRangeValue" name="simuladorRangeValue"></span></span>
			<input type="range" class="custom-range" id="simuladorRange" step="100000" name="simuladorRange" min="{{$producto->minima_inversion}}" max="{{$producto->maxima_inversion}}">
		</div>
		<div class="col-12 simuladorInputGroup">
			<div class="form-group row d-flex align-items-center">
				<label for="staticEmail" class="col-5 col-form-label text-center simuladorText1">¿A cuanto tiempo?</label>
				<div class="col-4">
					<input type="text" class="form-control simuladorInput" value="">
				</div>
				<label for="staticEmail" class="col-3 col-form-label simuladorText2">meses</label>
			</div>
		</div>
		<div class="col-12">
			<div class="row tablaR d-flex align-items-center"> 
				<div class="col-6 text-center">
					<p>Rentabilidad esperada anual</p>
					<p>{{$producto->caracteristicasFinancieras->rentabilidad_anual}}%</p>
				</div>
				<div class="col-6 text-center">
					<p>Plazo retorno inversión</p>
					<p>24 meses</p>
				</div>
			</div>
		</div>
		<div class="col-12 resultado">
			<div class="row d-flex align-items-center">
				<div class="col-3">Ganas</div>
				<div class="col-9">$1.500.000</div>
			</div>
		</div>
		<div class="col-12">
			<div class="row">
				<div class="col-12" style="margin: 1rem 0;">
					<div class="indicadores d-inline-flex d-flex align-items-end">
						@if($producto->tiempoInversion=='temprana')
							<div class="d-flex align-items-center justify-content-center inversion temprana activeInversion">
						@else
							<div class="d-flex align-items-center justify-content-center inversion temprana">
						@endif
								<div class="text-center">
									<p>Inversión Temprana</p>
									<p>10.11%</p>
								</div>
							</div>
						@if($producto->tiempoInversion=='normal')
							<div class="d-flex align-items-center justify-content-center inversion normal activeInversion">
						@else
							<div class="d-flex align-items-center justify-content-center inversion normal">
						@endif
								<div class="text-center">
									<p>Inversión Normal</p>
									<p>9.11%</p>
								</div>
							</div>
						@if($producto->tiempoInversion=='cierre')
							<div class="d-flex align-items-center justify-content-center inversion cierre activeInversion">
						@else
							<div class="d-flex align-items-center justify-content-center inversion cierre">
						@endif
								<div class="text-center">
									<p>Inversión Cierre</p>
									<p>8.11%</p>
								</div>
							</div>
					</div>
				</div>
				<div class="col-12">
         			<p class="text-justify" style="font-size:.8rem;">La rentabilidad se genera desde el momento de partida de la obra</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="proyectoButton d-none d-lg-block">
	<a href="#">
		<button type="button" class="btn btn-primary btn-lg blue-btn">Invertir en este Proyecto</button>
	</a>
</div>    
