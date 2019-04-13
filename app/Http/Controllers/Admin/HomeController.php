<?php

namespace Fraccion\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Fraccion\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin/home");
    }
}
