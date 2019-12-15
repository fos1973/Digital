<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Movie;
use App\Genre;
use App\Actor;
use Auth;

class PeliculasController extends Controller
{


    function index(){
      $movies = Movie::all()->random(5);
      $ultimas = Movie::latest()->take(5)->get();
      $vac = compact("movies","ultimas");
      return view('movies.index', $vac);
    }


    function detalle($id){
      $usuario = Auth::user();
      $movie = Movie::find($id);
      $vac = compact("movie","usuario");
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
      $usuarioLog = Auth::user();
      $generos = Genre::all();
      $actores = Actor::all();

      return view('movies.create',compact('generos','actores'));
    }

    function insert(Request $formulario){

      $usuarioLog = Auth::user();

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
      $pelicula->revenue = $formulario["revenue"];


      $pelicula->save();

       return redirect('/peliculas');

    }

    function eliminar(Request $req){
      $usuarioLog = Auth::user();
      $id = $req["id"];

    Actor::where('favorite_movie_id','=',$req->$id)->update(["favorite_movie_id" => null]);



      dd(Actor::where('favorite_movie_id','=',$req->$id)->get());
          //
        // Movie::find($id)->actors()->detach();
        //
        // Movie::find($id)->delete();
        //
        //   return redirect('/peliculas');
    }

    function modificar($id){
      $usuarioLog = Auth::user();
      $generos = Genre::all();
      $actores = Actor::all();

      $pelicula = Movie::find($id);

      return view('movies.modificar',compact('pelicula','generos','actores','usuarioLog'));


    }

    function actualizar(Request $formulario,$id){
      $usuarioLog = Auth::user();

      $inputs = [
        'title' => 'required|min:1|max:500',
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

      $pelicula = Movie::find($id);

      $pelicula->title = $formulario["title"];
      $pelicula->rating = $formulario["rating"];
      $pelicula->awards = $formulario["awards"];
      $pelicula->release_date = $formulario["release_date"];
      $pelicula->length = $formulario["length"];
      $pelicula->genre_id = $formulario["genre_id"];
      $pelicula->revenue = $formulario["revenue"];

      $pelicula->update();

       return redirect('/peliculas');

    }

    function buscar(Request $busqueda){

      $titulos = Movie::where('title','like',"%".$busqueda['termino']."%")->paginate(5);
      return view('movies.titulos',compact('titulos'));
    }


}
