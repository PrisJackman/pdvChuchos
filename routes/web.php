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

Route::get('/home', 'IndexController@index');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

/*Mas opciones url*/
Route::get('/registrar_productos', 'productosController@vista_registro');
Route::get('/registrar_categorias', 'categoriasController@vista_registroc');
Route::get('/registrar_matprima', 'matprimaController@vista_registrom');
Route::get('/consulta_productos', 'productosController@vista_productos');
Route::get('/consulta_matprima', 'matprimaController@vista_matprima');



/*Caja*/
Route::get('/caja', 'cajaController@vista_caja');
