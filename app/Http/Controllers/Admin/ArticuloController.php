<?php

namespace Fraccion\Http\Controllers\Admin;

use Fraccion\Articulo;
use Fraccion\CategoriaBlog;
use Illuminate\Http\Request;
use Fraccion\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Fraccion\Http\Requests\StoreArticulo;
use Fraccion\Http\Requests\UpdateArticulo;
use Illuminate\Support\Facades\Session;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos = Articulo::all();
        Session::forget('input');  
        Session::forget('editArticulo');  
        Session::forget('articuloCreate');
        Session::forget('articuloEdit');
        
        
        return view("admin/blog", compact("articulos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = CategoriaBlog::where("activo", 1)->get();
        //dd($categorias);
        return view("admin/articuloCreate", compact("categorias"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticulo $request)
    {
        //dd($request->all());
        
        //dump($request->all());

        $input["titulo"] =$request->inputTitulo;
        $input["fecha_creacion"] =date('Y-m-d H:i:s');
        $input["estado"] =$request->inputEstado;
        $input["descripcion"] =$request->inputDescripcion;
        $input["cuerpo"] =$request->inputCuerpo;
        $input["categoria_blog_id"] =$request->inputCategoria;

        //dump($input);

        $articulo = Articulo::create($input);
        
        //$this->storeRecursos($request, $articulo);
        Session::put('articuloCreate', 'true');
        //return view("admin/articuloInfo", compact('articulo'));
        return redirect()->route('recursoBlog.create', ['articulo' => $articulo->id]);

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \Fraccion\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function show(Articulo $articulo)
    {
        //dd($articulo);
        return view("admin/articuloInfo", compact('articulo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Fraccion\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function edit(Articulo $articulo)
    {
        $categorias = CategoriaBlog::where("activo", 1)->get();

        if(Session::get('articuloEdit') == null ){
            $input['inputTitulo'] = $articulo->titulo;
            $input['inputDescripcion'] = $articulo->descripcion;
            $input['inputEstado'] = $articulo->estado;
            $input['inputCuerpo'] = $articulo->cuerpo;
            $input['inputCategoria'] = $articulo->categoria_blog_id;

            Session::put('input', $input);

        }
        
        Session::put('articuloEdit', 'true');
        
        return view("admin/articuloEdit", compact('articulo', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Fraccion\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticulo $request, Articulo $articulo)
    {
        /*dump($request);
        dump($articulo);*/
        
        $articulo->titulo = $request->has('inputTitulo') ? $request->inputTitulo:$articulo->titulo;
        $articulo->descripcion = $request->has('inputDescripcion') ? $request->inputDescripcion:$articulo->descripcion;
        $articulo->estado = $request->has('inputEstado') ? $request->inputEstado:$articulo->estado;
        $articulo->cuerpo = $request->has('inputCuerpo') ? $request->inputCuerpo:$articulo->cuerpo;
        $articulo->categoria_blog_id = $request->has('inputCategoria') ? $request->inputCategoria:$articulo->categoria_blog_id;

        if ($articulo->isDirty()){
            $articulo->save();
        }

        return redirect()->route('articulos.show', ['articulo' => $articulo->id]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Fraccion\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articulo $articulo)
    {
        if($articulo->recursos->isNotEmpty()){
            $this->deleteRecursos($articulo);
          }
          $articulo->delete();

          return back()->withInput();
  
    }

    private function deleteRecursos(Articulo $articulo){
        for ($i=0; $i<count($articulo->recursos); $i++) {
          echo "<script>console.log('Borrando el recurso: ".$articulo->recursos[$i]->nombre."')</script>";
          Storage::disk('public')->delete("articulos\\".$articulo->recursos[$i]->nombre);
        }
        $articulo->recursos()->delete();
    }
  
  
}
