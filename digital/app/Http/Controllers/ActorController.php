<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Actor;

class ActorController extends Controller
{
    function index(){
      dd(Actor::all());
    }

    function show($id){
      $actor = Actor::find($id);
      return view('actors.detail',['actor'=>$actor]);
    }
}
