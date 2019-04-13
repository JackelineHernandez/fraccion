<?php

namespace Fraccion\Http\Controllers\Admin;

use Fraccion\RecursoBlog;
use Illuminate\Http\Request;
use Fraccion\Http\Controllers\Controller;
use Fraccion\Articulo;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class RecursoBlogController extends Controller
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
    public function create(Articulo $articulo)
    {
        //dd($articulo);
        Session::put('articuloCreate', 'true');
        return view("admin/articuloInfo", compact('articulo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $articulo = Articulo::find($request->articulo_id);
        //dd($articulo);
        
        //dump($articulo);
        //dd($request->all());
        $files = $request->file('fichero_articulo');
        
        if(explode("/", $files->getMimeType())[0] == "image"){
            $ruta="storage/articulos/imagenes/";
            $ruta2="articulos\imagenes\\";
            $ruta3="public\articulos\imagenes\\";
        }else{
            $ruta="storage/articulos/videos/";
            $ruta2="articulos\/videos\\";
            $ruta3="public\articulos\/videos\\";
        }

        $ruta=$ruta.$articulo->id.strtotime($articulo->fecha_creacion).$files->getClientOriginalName();
        $nombre = $articulo->id.strtotime($articulo->fecha_creacion).$files->getClientOriginalName();
        Storage::disk('public')->put($ruta2.$nombre, \File::get($files));

        if (Storage::exists($ruta3.$nombre))
        {
            $contenido["fecha_creacion"] =date('Y-m-d H:i:s');
            $contenido["ruta"] =$ruta;
            $contenido["nombre"] =$nombre;
            $contenido["posicion"] =$request->inputPosicion;
            $contenido["usuario_id"] =1;
            $contenido["tipo_recurso_id"] = explode("/", $files->getMimeType())[0] == "image"? 1 : 2;
            $articulo->recursos()->create($contenido);
        }
        return redirect()->route('recursoBlog.create', ['articulo' => $articulo->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Fraccion\RecursoBlog  $recursoBlog
     * @return \Illuminate\Http\Response
     */
    public function show(RecursoBlog $recursoBlog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Fraccion\RecursoBlog  $recursoBlog
     * @return \Illuminate\Http\Response
     */
    public function edit(RecursoBlog $recursoBlog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Fraccion\RecursoBlog  $recursoBlog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RecursoBlog $recursoBlog)
    {
    
        $recursoBlog->posicion = $request->has('inputPosicion') ? $request->inputPosicion:$recursoBlog->posicion;
        
        if ($recursoBlog->isDirty()){
            $recursoBlog->save();
        }

        return back()->withInput();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Fraccion\RecursoBlog  $recursoBlog
     * @return \Illuminate\Http\Response
     */
    public function destroy(RecursoBlog $recursoBlog)
    {
        //dd($recursoBlog);
        if($recursoBlog->tipo_recurso_id==1)
            Storage::disk('public')->delete("articulos\imagenes\\".$recursoBlog->nombre);
        else if($recursoBlog->tipo_recurso_id==2)
            Storage::disk('public')->delete("articulos\/videos\\".$recursoBlog->nombre);
        $recursoBlog->delete();
        
        Session::put('articuloEdit', 'true');
        return back()->withInput();
  
    }
}
