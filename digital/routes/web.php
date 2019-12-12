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

Route::get('/', 'ActorController@index');
Route::get('/actor/{id}', 'ActorController@show');
Route::get('/peliculas', 'PeliculasController@index');
Route::get('/peliculas/detalle/{id}', 'PeliculasController@detalle');

Route::get('/peliculas/titulos', 'PeliculasController@titulos');
Route::get('/peliculas/nueva', 'PeliculasController@create');
Route::post('/peliculas/nueva', 'PeliculasController@insert');
Route::get('/home', 'HomeController@index')->name('home');
