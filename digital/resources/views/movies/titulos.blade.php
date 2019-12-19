@extends('layouts.template')

@section('section')
  <ul class="list-group">
      <li class="list-group-item active">Listado de todas las peliculas</li>
      @foreach ($titulos as $titulo)
        <li class="list-group-item"><a href="/peliculas/detalle/{{$titulo->id}}">{{$titulo->title}}</a></li>
      @endforeach
        <li class="list-group-item justify-content-center">
          {{$titulos->links()}}
        </li>
        <li class="list-group-item justify-content-center btn ">
          <a href="/peliculas/nueva/">Nueva</a>

        </li>

@endsection

@section('aside')

@endsection
