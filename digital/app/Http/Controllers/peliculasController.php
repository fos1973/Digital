<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Movie;
use App\Genre;
use App\Actor;

class PeliculasController extends Controller
{
    function index(){
      $movies = Movie::all()->random(5);
      $ultimas = Movie::latest()->take(5)->get();
      $vac = compact("movies","ultimas");
      return view('movies.index', $vac);
    }


    function detalle($id){
      $movie = Movie::find($id);
      $vac = compact("movie");
      return view('movies.detail', $vac);
    }

    function titulos(){
      $titulos = Movie::paginate(5);
      $vac = compact('titulos');
      return view('movies.titulos', $vac);

    }

    function listadoApi(){
      $listado = Movie::all();
      return json_encode($listado);
    }

    function create(){
      $generos = Genre::all();
      $actores = Actor::all();

      return view('movies.create',compact('generos','actores'));
    }

    function insert(Request $formulario){

      $inputs = [
        'title' => 'required|unique:movies,title|min:1|max:500',
        'rating' => 'required|between:0,10.0',
        'awards' => 'required|integer|min:1|max:10',
        'release_date' => 'required|date',
        'length' => 'required|integer',
        'genre_id' => 'required',
      ];

      $mensajes = [ 'required' => 'El campo :attribute es requerido',
        'unique' => 'El :attribute no se puede repetir',
        'min' => 'El valor de :attribute debe ser mayor a :min',
        'max' => 'El valor de :attribute debe ser menor a :max',
        'between' => 'El valor de :attribute debe estar entre :between',
        'integer' => 'El valor de :attribute debe ser un numero entero',
        'date' => 'El valor de :attribute debe ser una fecha',

      ];

      $this->validate($formulario,$inputs,$mensajes);

      $pelicula = new Movie();

      $pelicula->title = $formulario["title"];
      $pelicula->rating = $formulario["rating"];
      $pelicula->awards = $formulario["awards"];
      $pelicula->release_date = $formulario["release_date"];
      $pelicula->length = $formulario["length"];
      $pelicula->genre_id = $formulario["genre_id"];

      $pelicula->save();

       return redirect('/peliculas');

    }

}
