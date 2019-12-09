<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;
use App\Genre;

class PeliculasController extends Controller
{
    function index(){
      $random = Movie::all()->random(5);
      $ultimas = Movie::latest()->take(5)->get();
      return view('movies.index', ['movies' => $random, 'ultimas' => $ultimas]);
    }


    function detalle($id){
      $detalle = Movie::find($id);
      return view('movies.detail', ['movie' => $detalle]);
    }

    function titulos(){
      $titulos = Movie::all();
      //@foreach ($titulos as $titulo) {
      //echo $titulo->title . "</br>";
      //  if($p->genre){
      //    echo $p->genre->name."<br>";
      //  }
      //}
    }

}
