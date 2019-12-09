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
    <li class="list-group-item">
      <ul class="list-group active">
        @foreach ($movie->actors as $actor)
            <li class="list-group-item">
              <a href="/actor/{{$actor->id}}">{{$actor->first_name}} {{$actor->last_name}}</a>
            </li>
        @endforeach
      </ul>
    </li>
  </ul>
</section>
@endsection
