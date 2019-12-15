@extends('layouts.template')

@section('section')
<section>
  <ul class="list-group">
    <li class="list-group-item active">Detalle de pelicula : {{$movie->title}}</li>
    <li class="list-group-item">Rating: {{$movie->rating}}</li>
    <li class="list-group-item">Premio: {{$movie->awards}}</li>
    <li class="list-group-item">Estreno: {{$movie->release_date}}</li>
    <li class="list-group-item">Duracion: {{$movie->length}} Minutos</li>
    @if ($movie->genre)
      <li class="list-group-item">Genero: {{$movie->genre->name}}</li>
    @endif
    @if ($movie->revenue)
      <li class="list-group-item">Recaudacion: {{$movie->revenue}}</li>
    @endif
    <li class="list-group-item">
      <ul class="list-group active">
        @foreach ($movie->actors as $actor)
            <li class="list-group-item">
              <a href="/actor/detalle/{{$actor->id}}">{{$actor->first_name}} {{$actor->last_name}}</a>
            </li>
        @endforeach
      </ul>
    </li>
    @if ($usuario)
    <li>
      <a href="/peliculas/modificar/{{$movie->id}}" class="btn btn-outline-warning btn-block">
        Modificar
      </a>
    </li>
    <li>
      <form method="post" action="/peliculas/eliminar">
        @csrf
        <input type="hidden" name="id" value="{{$movie->id}}">
        <button type="submit" class="btn btn-block btn-outline-danger">Eliminar</button>
      </form>
    </li>
  @endif
  </ul>
</section>
@endsection
