<?php

namespace Fraccion\Http\Controllers\Admin;

use Fraccion\ContenidoProducto;
use Fraccion\Producto;
use Illuminate\Http\Request;
use Fraccion\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ContenidoProductoController extends Controller
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
    public function create(Producto $producto)
    {
        //dd($producto);
        //Session::put('articuloCreate', 'true');
        return view("admin/productoBasicInfo", compact('producto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*dd($request->all());

        $producto = Producto::find($request->producto_id);
        $file = $request->file('fichero_producto');

        if(explode("/", $file->getMimeType())[0] == "image"){
            $ruta="storage/productos/imagenes/";
            $ruta2="productos\imagenes\\";
            $ruta3="public\productos\imagenes\\";
        }else{
            $ruta="storage/productos/videos/";
            $ruta2="productos\/videos\\";
            $ruta3="public\productos\/videos\\";
        }

        //dd($file);
        //foreach ($files as $file) {
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
        //  }
        }

        return redirect()->route('contenidoProducto.create', ['producto' => $producto->id]);*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \Fraccion\ContenidoProducto  $contenidoProducto
     * @return \Illuminate\Http\Response
     */
    public function show(ContenidoProducto $contenidoProducto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Fraccion\ContenidoProducto  $contenidoProducto
     * @return \Illuminate\Http\Response
     */
    public function edit(ContenidoProducto $contenidoProducto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Fraccion\ContenidoProducto  $contenidoProducto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContenidoProducto $contenidoProducto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Fraccion\ContenidoProducto  $contenidoProducto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $idContenido)
    {
        //dd($request->all());

        $producto = Producto::find($request->producto_id);
        echo "<script>console.log('Borrando el contenido: ".$producto->contenidos->find($idContenido)->nombre_archivo."')</script>";
        //dd($producto->contenidos->find($idContenido)->nombre_archivo);
        if($producto->contenidos->find($idContenido)->tipo_contenidos_id==1)
            Storage::disk('public')->delete("productos\imagenes\\".$producto->contenidos->find($idContenido)->nombre_archivo);
        else if($producto->contenidos->find($idContenido)->tipo_contenidos_id==2){
            Storage::disk('public')->delete("productos\/videos\\".$producto->contenidos->find($idContenido)->nombre_archivo);
        }
        
        $producto->contenidos->find($idContenido)->delete();

        return back()->withInput();

    }
}
