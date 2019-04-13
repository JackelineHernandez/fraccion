<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
/*-------ADMIN--------*/
Route::apiresource('/admin/productos', 'Admin\ProductoController', ['only'=>['store', 'update', 'destroy']]);
Route::apiresource('/admin/articulos', 'Admin\ArticuloController', ['only'=>['store', 'update', 'destroy']]);
Route::apiresource('/admin/recursoBlog', 'Admin\RecursoBlogController', ['only'=>['store', 'destroy', 'update']]);
Route::apiresource('/admin/contenidoProducto', 'Admin\ContenidoProductoController', ['only'=>['store', 'destroy', 'update']]);
Route::apiresource('/admin/caracteristicaContenido', 'Admin\CaracteristicaContenidosController', ['only'=>['store', 'destroy']]);
Route::apiresource('/registro', 'RegistroController', ['only'=>['store']]);

/**
 * Guardar Caracteristicas Tecnicas
 */
Route::apiresource('/admin/caracteristicasTecnicas', 'Admin\CaracteristicasTecnicasController', ['only'=>['store', 'update', 'destroy']]);
