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

Auth::routes();

Route::get('/', 'PeliculasController@index');
Route::get('/peliculas', 'PeliculasController@index');
Route::get('/peliculas/detalle/{id}', 'PeliculasController@detalle');

Route::get('/peliculas/titulos', 'PeliculasController@titulos');
Route::get('/peliculas/nueva', 'PeliculasController@create')->middleware('auth');
Route::post('/peliculas/nueva', 'PeliculasController@insert')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home');

Route::post('/peliculas/eliminar','PeliculasController@eliminar')->middleware('auth');

Route::get('/peliculas/modificar/{id}','PeliculasController@modificar')->middleware('auth');
Route::post('/peliculas/actualizar/{id}','PeliculasController@actualizar')->middleware('auth');

Route::get('peliculas/buscar/','PeliculasController@buscar');

Route::get('actor/detalle/{id}','ActorController@show');
