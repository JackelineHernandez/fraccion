<?php

namespace Fraccion\Http\Controllers\Admin;

use Validator;
use Fraccion\Producto;
use Fraccion\Contenido;
use Fraccion\Estado;
use Fraccion\CaracteristicasTecnica;
use Fraccion\CaracteristicasFinanciera;
use Fraccion\ProductoMap;
use Fraccion\Constantes\ValidationRules;
use Fraccion\Http\Requests\StoreProducto;
use Fraccion\Http\Requests\UpdateProducto;
use Illuminate\Http\Request;
use Fraccion\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $productos = Producto::all();
      //dd($productos);
      Session::forget('input');  
      Session::forget('productoEdit');  
      Session::forget('editCaracteristica');
      Session::forget('editCaracteristicaId');
      return view("admin/productos", compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estados = Estado::all();
        return view("admin/productoCreate", compact('estados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProducto $request)
    {
      //dd($request->all());

      $request->session()->forget('input');
    
      
      $input["nombre"] =$request->inputNombre;
      $input["descripcion"] =$request->inputDescripcion;
      $input["fecha_inicio"] =$request->inputFechaInicio;
      $input["fecha_vencimiento"] =$request->inputFechaVencimiento;
      $input["maximo_inversionistas"] =$request->inputInversionistasMax;
      $input["minimo_inversionistas"] =$request->inputInversionistasMin;
      $input["maxima_inversion"] =$request->inputInversionMax;
      $input["minima_inversion"] =$request->inputInversionMin;
      $input["estados_id"] =$request->inputEstadoSelect;
      $input["aliados_id"] =1;
      $input["usuarios_id"] =1;
      $input["marca_tiempo_actualizacion"] =date('Y-m-d H:i:s');
      $input["caracteristicasFinancieras"]["rentabilidad_anual"]=$request->inputRentabilidadAnual;
      $input["caracteristicasFinancieras"]["rentabilidad_mensual"]=$request->inputRentabilidadMensual;
      $input["caracteristicasFinancieras"]["plazo_meses"]=$request->inputPlazoMeses;
      $input["caracteristicasFinancieras"]["objetivo_financiacion"]=$request->inputObjetivoFinanciacion;
      $input["caracteristicasFinancieras"]["beneficio_operacion"]=$request->inputBeneficioOperación;
      $input["caracteristicasFinancieras"]["usuarios_id"] =1;
      $input["caracteristicasFinancieras"]["marca_tiempo_actualizacion"] =date('Y-m-d H:i:s');
      $input["direccion"]["direccion"] =$request->inputDireccion;
      $input["direccion"]["latitud"] =$request->inputLatitud;
      $input["direccion"]["longitud"] =$request->inputLongitud;
      $input["direccion"]["usuarios_id"] =1;
      $input["direccion"]["marca_tiempo_actualizacion"] =date('Y-m-d H:i:s');

      //dd($input);

      $producto = Producto::create($input);
      $caracteristicasFinanciera=$producto->caracteristicasFinancieras()->create($input["caracteristicasFinancieras"]);
      $direccion=$producto->productoMap()->create($input["direccion"]);
      
      $this->storeContenidos($request, $producto);
      return redirect()->route('caracteristicasTecnicas', ['id' => $producto->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Fraccion\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        return view("admin/productoBasicInfo", compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Fraccion\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto, Request $request)
    {
      //dd($request-all());
      //dd($this);
      $estados = Estado::all();

      if($request->session()->get('productoEdit')==null){
        $input["inputNombre"]=$producto->nombre;
        $input["inputEstadoSelect"]=$producto->estados_id;
        $input["inputDescripcion"]=$producto->descripcion;
        $input["inputFechaInicio"]=$producto->fecha_inicio;
        $input["inputFechaVencimiento"]=$producto->fecha_vencimiento;
        $input["inputInversionMax"]=$producto->maxima_inversion;
        $input["inputInversionMin"]=$producto->minima_inversion;
        $input["inputInversionistasMax"]=$producto->maximo_inversionistas;
        $input["inputInversionistasMin"]=$producto->minimo_inversionistas;
        $input["inputDireccion"]=$producto->productoMap ? $producto->productoMap->direccion : "";
        $input["inputLatitud"]=$producto->productoMap ? $producto->productoMap->latitud : "";
        $input["inputLongitud"]=$producto->productoMap ? $producto->productoMap->longitud : "";
        $input["inputRentabilidadAnual"]=$producto->caracteristicasFinancieras->rentabilidad_anual;
        $input["inputRentabilidadMensual"]=$producto->caracteristicasFinancieras->rentabilidad_mensual;
        $input["inputPlazoMeses"]=$producto->caracteristicasFinancieras->plazo_meses;
        $input["inputObjetivoFinanciacion"]=$producto->caracteristicasFinancieras->objetivo_financiacion;
        $input["inputBeneficioOperacion"]=$producto->caracteristicasFinancieras->beneficio_operacion;
        
        $request->session()->put('productoEdit','true');
        $request->session()->put('input',$input);
      
      }
      
      return view("admin/productoEdit", compact('producto', 'estados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Fraccion\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProducto $request, Producto $producto)
    {
      $producto->nombre = $request->has('inputNombre') ? $request->inputNombre:$producto->nombre;
      $producto->descripcion = $request->has('inputDescripcion') ? $request->inputDescripcion:$producto->descripcion;
      $producto->fecha_inicio = $request->has('inputFechaInicio') ? $request->inputFechaInicio:$producto->fecha_inicio;
      $producto->fecha_vencimiento = $request->has('inputFechaVencimiento') ? $request->inputFechaVencimiento:$producto->fecha_vencimiento;
      $producto->maximo_inversionistas = $request->has('inputInversionistasMax') ? $request->inputInversionistasMax:$producto->maximo_inversionistas;
      $producto->minimo_inversionistas = $request->has('inputInversionistasMin') ? $request->inputInversionistasMin:$producto->minimo_inversionistas;
      $producto->maxima_inversion = $request->has('inputInversionMax') ? $request->inputInversionMax:$producto->maxima_inversion;
      $producto->minima_inversion = $request->has('inputInversionMin') ? $request->inputInversionMin:$producto->minima_inversion;
      $producto->estados_id = $request->inputEstadoSelect;
      $producto->aliados_id = 1;
      $producto->usuarios_id = 1;

      $producto->productoMap->direccion = $request->has('inputDireccion') ? $request->inputDireccion:$producto->productoMap->direccion;
      $producto->productoMap->latitud = $request->has('inputLatitud') ? $request->inputLatitud:$producto->productoMap->latitud;
      $producto->productoMap->longitud = $request->has('inputLongitud') ? $request->inputLongitud:$producto->productoMap->longitud;
      
      $producto->caracteristicasFinancieras->rentabilidad_anual = $request->has('inputRentabilidadAnual') ? $request->inputRentabilidadAnual:$producto->rentabilidad_anual;
      $producto->caracteristicasFinancieras->rentabilidad_mensual = $request->has('inputRentabilidadMensual') ? $request->inputRentabilidadMensual:$producto->rentabilidad_mensual;
      $producto->caracteristicasFinancieras->plazo_meses = $request->has('inputPlazoMeses') ? $request->inputPlazoMeses:$producto->plazo_meses;
      $producto->caracteristicasFinancieras->objetivo_financiacion = $request->has('inputObjetivoFinanciacion') ? $request->inputObjetivoFinanciacion:$producto->objetivo_financiacion;
      $producto->caracteristicasFinancieras->beneficio_operacion = $request->has('inputBeneficioOperacion') ? $request->inputBeneficioOperacion:$producto->beneficio_operacion;
      
      /*if ($hotelService->isDirty())
        $producto->save();
      */
      if($request->file('fichero_producto')){
        //$this->deleteContenidos($producto);
        $this->storeContenidos($request, $producto);
      }
      

      /*se van a hacer pruebas en new qa y pruebas cargaas*/
      if ($producto->caracteristicasFinancieras->isDirty()){
        $producto->caracteristicasFinancieras->marca_tiempo_actualizacion=date('Y-m-d H:i:s');
        $producto->caracteristicasFinancieras->save();
      }

      if ($producto->productoMap->isDirty()){
        $producto->productoMap->marca_tiempo_actualizacion=date('Y-m-d H:i:s');
        $producto->productoMap->save();
      }

      if ($producto->isDirty()){
        $producto->marca_tiempo_actualizacion=date('Y-m-d H:i:s');
        $producto->save();
      }
      
      return redirect()->route('caracteristicasTecnicas', ['id' => $producto->id]);

      //return view("admin/productoBasicInfo", compact('producto'));
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Fraccion\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($proyecto)
    {
        $producto = Producto::find($proyecto);

        if($producto->productoMap){
          $producto->productoMap()->delete();
        }

        if($producto->caracteristicasFinancieras){
          $producto->caracteristicasFinancieras()->delete();
        }
        if($producto->contenidos->isNotEmpty()){
          $this->deleteContenidos($producto);
        }
        if($producto->caracteristicasTecnicas->isNotEmpty()){
          foreach($producto->caracteristicasTecnicas as $caracteristicaTecnica){
            $this->deleteContenidosCaracteristica($caracteristicaTecnica);
            /*for ($i=0; $i<count($caracteristicaTecnica->contenidos); $i++) {
              echo "<script>console.log('Borrando el contenido: ".$caracteristicaTecnica->contenidos[$i]->nombre_archivo."')</script>";
              Storage::disk('public')->delete("productos\\".$caracteristicaTecnica->contenidos[$i]->nombre_archivo);
            }*/
            $caracteristicaTecnica->contenidos()->delete();
          }
          $producto->caracteristicasTecnicas()->delete();
        }

        $producto->delete();

        return back()->withInput();

    }

    private function storeContenidos(Request $request, Producto $producto){
      $files = $request->file('fichero_producto');
      
        foreach ($files as $file) {

          if(explode("/", $file->getMimeType())[0] == "image"){
            $ruta="storage/productos/imagenes/";
            $ruta2="productos\imagenes\\";
            $ruta3="public\productos\imagenes\\";
          }else{
              $ruta="storage/productos/videos/";
              $ruta2="productos\/videos\\";
              $ruta3="public\productos\/videos\\";
          }
          
          $ruta=$ruta.$producto->id.strtotime($producto->marca_tiempo_actualizacion).$file->getClientOriginalName();
          $nombre = $producto->id.strtotime($producto->marca_tiempo_actualizacion).$file->getClientOriginalName();
          Storage::disk('public')->put($ruta2.$nombre, \File::get($file));

          if (Storage::exists($ruta3.$nombre))
          {
            $contenido["marca_tiempo_actualizacion"] =date('Y-m-d H:i:s');
            $contenido["ubicacion"] =$ruta;
            $contenido["nombre_archivo"] =$nombre;
            $contenido["extension"] =explode("/", $file->getMimeType())[1];
            $contenido["tamanio"] =$file->getSize();
            $contenido["usuarios_id"] =1;
            $contenido["tipo_contenidos_id"] = explode("/", $file->getMimeType())[0] == "image"? 1 : 2;
            $producto->contenidos()->create($contenido);
          }
        }
    }

    private function deleteContenidos(Producto $producto){
      for ($i=0; $i<count($producto->contenidos); $i++) {
        echo "<script>console.log('Borrando el contenido: ".$producto->contenidos[$i]->nombre_archivo."')</script>";
        if($producto->contenidos[$i]->tipo_contenidos_id==1)
          Storage::disk('public')->delete("productos\imagenes\\".$producto->contenidos[$i]->nombre_archivo);
        else if($producto->contenidos[$i]->tipo_contenidos_id==2)
        Storage::disk('public')->delete("productos\/videos\\".$producto->contenidos[$i]->nombre_archivo);
      }
      $producto->contenidos()->delete();
    }

    private function deleteContenidosCaracteristica(CaracteristicasTecnica $caracteristicasTecnica){
      for ($i=0; $i<count($caracteristicasTecnica->contenidos); $i++) {
          echo "<script>console.log('Borrando el contenido: ".$caracteristicasTecnica->contenidos[$i]->nombre_archivo."')</script>";
          if($caracteristicasTecnica->contenidos[$i]->tipo_contenidos_id==1)
            Storage::disk('public')->delete("productos\imagenes\\".$caracteristicasTecnica->contenidos[$i]->nombre_archivo);
          else if($caracteristicasTecnica->contenidos[$i]->tipo_contenidos_id==2)
            Storage::disk('public')->delete("productos\/videos\\".$caracteristicasTecnica->contenidos[$i]->nombre_archivo);
        }
      $caracteristicasTecnica->contenidos()->delete();
  }
}
