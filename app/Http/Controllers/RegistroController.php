<?php

namespace Fraccion\Http\Controllers;

use Illuminate\Http\Request;
use Fraccion\Persona;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("registro");
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
        //dd($request);
        $input["nombre"] =$request->inputNombres;
        $input["apellido"] =$request->inputApellidos;
        $input["fecha_nacimiento"] =$request->inputAno."-".$request->inputMes."-".$request->inputDia;
        $input["telefono"] =$request->inputPais.$request->inputNumero;
        $input["correo"] =$request->inputEmail;
        $input["marca_tiempo_actualizacion"] =date('Y-m-d H:i:s');
      
        //dd($input);
        $persona = Persona::create($input);
        
        return redirect()->route('registro.index', ['registrado' => 1]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
