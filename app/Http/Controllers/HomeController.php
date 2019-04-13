<?php

namespace Fraccion\Http\Controllers;

use Illuminate\Http\Request;
use Fraccion\Articulo;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulo= Articulo::First();
        return view("home", compact('articulo'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function comoFunciona()
    {
        return view("comoFunciona");
    }
}
