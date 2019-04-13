<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});
*/

/*Route::view('/', 'welcome');
Route::view('/About', 'About');
Route::view('/FAQ', 'FAQ');
Route::view('/Allies', 'Allies');*/

Route::get('/', 'HomeController@index');
Route::get('/comoFunciona', 'HomeController@comoFunciona');

Route::get('/proyectos', 'ProductoController@index');
Route::get('/detalleProyecto/{id}', 'ProductoController@show');

Route::apiresource('/articulos', 'ArticuloController', ['only'=>['index', 'show']]);
Route::apiresource('/registro', 'RegistroController', ['only'=>['index']]);
Route::apiresource('/calculadora', 'CalculadoraController', ['only'=>['index']]);

/*----------ADMIN------------*/
Route::get('/admin', 'Admin\HomeController@index');
Route::apiresource('/admin/productos', 'Admin\ProductoController', ['only'=>['index', 'create', 'show', 'edit']]);
Route::get('/admin/caracteristicasTecnicas/create/{id}', 'Admin\CaracteristicasTecnicasController@create')->name('caracteristicasTecnicas');
Route::apiresource('/admin/articulos', 'Admin\ArticuloController', ['only'=>['index', 'create', 'show', 'edit']]);
Route::get('/admin/recursoBlog/{articulo}', 'Admin\RecursoBlogController@create')->name("recursoBlog.create");
Route::get('/admin/contenidoProducto/{producto}', 'Admin\ContenidoProductoController@create')->name("contenidoProducto.create");
Route::apiresource('/admin/registros', 'Admin\RegistrosController', ['only'=>['index']]);

