<?php

namespace Fraccion\Http\Controllers\Admin;

use Fraccion\CaracteristicasContenido;
use Fraccion\CaracteristicasTecnica;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Fraccion\Http\Controllers\Controller;

class CaracteristicaContenidosController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \Fraccion\CaracteristicasContenido  $caracteristicasContenido
     * @return \Illuminate\Http\Response
     */
    public function show(CaracteristicasContenido $caracteristicasContenido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Fraccion\CaracteristicasContenido  $caracteristicasContenido
     * @return \Illuminate\Http\Response
     */
    public function edit(CaracteristicasContenido $caracteristicasContenido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Fraccion\CaracteristicasContenido  $caracteristicasContenido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaracteristicasContenido $caracteristicasContenido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Fraccion\CaracteristicasContenido  $caracteristicasContenido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $idContenido)
    {
        //dd($request->all());

        $caracteristica = CaracteristicasTecnica::find($request->caracteristica_id);
        echo "<script>console.log('Borrando el contenido: ".$caracteristica->contenidos->find($idContenido)->nombre_archivo."')</script>";
        //dd($caracteristica->contenidos->find($idContenido)->nombre_archivo);
        if($caracteristica->contenidos->find($idContenido)->tipo_contenidos_id==1)
            Storage::disk('public')->delete("productos\imagenes\\".$caracteristica->contenidos->find($idContenido)->nombre_archivo);
        else if($caracteristica->contenidos->find($idContenido)->tipo_contenidos_id==2){
            Storage::disk('public')->delete("productos\/videos\\".$caracteristica->contenidos->find($idContenido)->nombre_archivo);
        }
        
        $caracteristica->contenidos->find($idContenido)->delete();

        //return back()->withInput();
        return redirect()->route('caracteristicasTecnicas', ['id' => $request->producto_id]);
    }
}
