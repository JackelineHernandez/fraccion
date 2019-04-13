<div class="row" id="calculadoraBlock" >
  <div class="col-12 calculadoraTitle">
    <div class="iconoCalculadora d-flex align-items-center">
      <span>Calcula tu inversión</span>
    </div>
  </div>
  <div class="col-12 calculadoraText">
    <h5>Aquí das tu primer paso al mundo de las inversiones</h5>
  </div>
  <div class="col-12 calculadoraForm">
    <form class="form-inline d-flex justify-content-center" id="calcular" action="/calculadora">
      <label for="edad" class="col-form-label">Tengo</label>
      <div class="col-4 col-lg-1">
        <input type="text" class="form-control-plaintext" id="edad">
      </div>
      <label for="trabajo" class="col-form-label">años, trabajo en</label>
      <div class="col-6 col-lg-2">
        <input type="text" class="form-control-plaintext" id="trabajo">
      </div>
      <label for="inversion" class="col-form-label" style="font-weight: bold">y</label>
      <div class="col-12 col-lg-2">
        <select  class="custom-select" name="inversion" id="inversion">
          <option value="0">Es mi primera vez invirtiendo</option>
          <option value="1">Ya he invertido antes</option>
        </select>
      </div>
    </form>
  </div>
  <div class="col-lg-12 d-flex justify-content-center calculadoraButton">
    <button type="button" class="btn btn-primary btn-lg blue-btn" onclick="continuarCal()">Continuar</button>
  </div>
</div>
      