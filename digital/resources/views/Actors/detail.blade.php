@extends('layouts.template')

@section('section')
  <section>
    <ul class="list-group">
      <li class="list-group-item active">Detalle de Actor : {{$actor->first_name}} {{$actor->last_name}}</li>
      <li class="list-group-item">Rating: {{$actor->rating}}</li>
      @if ($actor->movie)
        <li class="list-group-item">Pelicula Destacada: {{$actor->movie->title}}</li>
      @endif
    </ul>
    <ul class="list-group">

      @foreach ($actor->movies as $movie)
        <li class="list-group-item">Peliculas:
          <a href="/peliculas/detalle/{{$movie->id}}">{{$movie->title}}</a>
        </li>
      @endforeach

    </ul>
    <ul class="list-group">
      @if (count($actor->episodes) != 0)
        @foreach ($actor->episodes as $episode)
          <li class="list-group-item">Episodios:
            <a href="/movies/detail/{{$episode->id}}">{{$episode->title}}</a>
          </li>
        @endforeach
      @else
        <li class="list-group-item">No Trabajo en Series</li>
      @endif
    </ul>
    <a class="btn btn-lg btn-primary mt-1" href="/peliculas/">Inicio</a>
  </section>
@endsection
