<?php

namespace Fraccion\Http\Controllers\Admin;

use Fraccion\Producto;
use Fraccion\CaracteristicasTecnica;
use Illuminate\Http\Request;
use Fraccion\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Fraccion\Http\Requests\StoreCaracteristicasTecnicas;
use Fraccion\Http\Requests\UpdateCaracteristicaTecnica;

class CaracteristicasTecnicasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id, Request $request)
    {
      $producto = Producto::find($id);
      $request->session()->forget('input');
      
      return view("admin/caracteristicasTecnicasCreate", compact('producto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCaracteristicasTecnicas $request)
    {
        //dd($request->all());

        $request->session()->forget('input');
      
        $input["producto_id"] =$request->producto_id;
        $input["marca_tiempo_actualizacion"] =date('Y-m-d H:i:s');
        $input["nombre"] =$request->inputNombreCarTecnica;
        $input["descripcion"] =$request->inputDescripcionCarTecnica;
        $input["visible"] = $request->customRadioVisible!="false" ? 1:0;
        $input["orden"] =(int)$request->inputOrdenCarTecnica;
        $input["usuarios_id"] =1;

        //dd($input);
        $caracteristicasTecnica = CaracteristicasTecnica::create($input);

        $files = $request->file('fichero_caracteristica');
        if($files)
            $this->storeContenidos($files, $caracteristicasTecnica);
        //dd($caracteristicasTecnica->producto);
        //return redirect()->route('detalleProducto', $caracteristicasTecnica->producto);
        return redirect()->route('caracteristicasTecnicas', $caracteristicasTecnica->producto);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Fraccion\CaracteristicasTecnica  $caracteristicasTecnica
     * @return \Illuminate\Http\Response
     */
    public function show(CaracteristicasTecnica $caracteristicasTecnica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Fraccion\CaracteristicasTecnica  $caracteristicasTecnica
     * @return \Illuminate\Http\Response
     */
    public function edit(CaracteristicasTecnica $caracteristicasTecnica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Fraccion\CaracteristicasTecnica  $caracteristicasTecnica
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCaracteristicaTecnica $request, CaracteristicasTecnica $caracteristicasTecnica)
    {
        //dd($request->all());
        $caracteristicasTecnica->nombre = $request->has('inputNombreCarTecnicaEdit') ? $request->inputNombreCarTecnicaEdit:$caracteristicasTecnica->nombre;
        $caracteristicasTecnica->descripcion = $request->has('inputDescripcionCarTecnicaEdit') ? $request->inputDescripcionCarTecnicaEdit:$caracteristicasTecnica->descripcion;
        $caracteristicasTecnica->visible = $request->has('customRadioVisibleEdit') ? 
                                            ($request->customRadioVisibleEdit!="false" ? 1:0):$caracteristicasTecnica->visible;
        $caracteristicasTecnica->orden = $request->has('inputOrdenCarTecnicaEdit') ? $request->inputOrdenCarTecnicaEdit:$caracteristicasTecnica->orden;

        $caracteristicasTecnica->save();
        
        if($request->file('fichero_caracteristicaEdit')){
            
            $this->deleteContenidos($caracteristicasTecnica);
            $files = $request->file('fichero_caracteristicaEdit');
            $this->storeContenidos($files, $caracteristicasTecnica);
          }
        
        return redirect()->route('caracteristicasTecnicas', $caracteristicasTecnica->producto);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Fraccion\CaracteristicasTecnica  $caracteristicasTecnica
     * @return \Illuminate\Http\Response
     */
    public function destroy(CaracteristicasTecnica $caracteristicasTecnica)
    {
      //dd($caracteristicasTecnica);
      /*for ($i=0; $i<count($caracteristicasTecnica->contenidos); $i++) {
            echo "<script>console.log('Borrando el contenido: ".$caracteristicasTecnica->contenidos[$i]->nombre_archivo."')</script>";
            Storage::disk('public')->delete("productos\\".$caracteristicasTecnica->contenidos[$i]->nombre_archivo);
          }*/
          $this->deleteContenidos($caracteristicasTecnica);
      $caracteristicasTecnica->contenidos()->delete();

      $caracteristicasTecnica->delete();

      return back()->withInput();
    }

    private function storeContenidos(Array $files, CaracteristicasTecnica $caracteristicasTecnica){
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

            $ruta=$ruta.$caracteristicasTecnica->id.strtotime($caracteristicasTecnica->marca_tiempo_actualizacion).$file->getClientOriginalName();
            $nombre = $caracteristicasTecnica->id.strtotime($caracteristicasTecnica->marca_tiempo_actualizacion).$file->getClientOriginalName();
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
              $caracteristicasTecnica->contenidos()->create($contenido);
            }
          }
    }

    private function deleteContenidos(CaracteristicasTecnica $caracteristicasTecnica){
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
