@extends('layouts.template')

@section('section')
<section class="d-flex col-10 mx-auto ">

  <div class="card flex-fill text-white bg-primary">
    <div class="card-header">
      <h1 class="card-title"> Modificar Pelicula</h1>
    </div>
    <div class="card-body">

      @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
          {{$error}}
          <button type="button" class="close" data-dismiss="alert">
            <span>&times;</span>
          </button>
        </div>
      @endforeach
      <form method="post" action="/peliculas/actualizar/{{$pelicula->id}}">
        @csrf
       <div class="form-group">
        <label for="title">Titulo de pelicula</label>
        <input type="text" class="form-control" id="titulo" name="title" value="{{$pelicula->title}}">
      </div>
      <div class="form-group">
        <label for="rating">
          Rating
          @if (old('rating'))
            <span class="badge badge-light">{{$pelicula->rating}}</span>
          @else
            <span class="badge badge-light" id="rating-value"></span>
          @endif
        </label>
        <input type="range" min="0" max="10" step=".1" class="form-control" id="rating" name="rating" value="{{$pelicula->rating}}">
      </div>
      <div class="form-group">
        <label for="awards">Premios</label>
        <input type="number" class="form-control" id="awards" name="awards" value="{{$pelicula->awards}}">
      </div>
      <div class="form-group">
        <label for="release_date">Fecha de lanzamiento</label>
        <input type="date" class="form-control" id="release_date" name="release_date" value="{{$pelicula->release_date}}">
      </div>
      <div class="form-group">
        <label for="length">Duracion</label>
        <input type="number" class="form-control" id="length" name="length" value="{{$pelicula->length}}">
      </div>
      <div class="form-group">
        <label for="revenue">Recaudacion</label>
        <input type="number" class="form-control" id="revenue" name="revenue" value="{{$pelicula->revenue}}">
      </div>
      <div class="form-group">
        <label for="title">Genero</label>
        <select class="form-control" name="genre_id">
          @foreach ($generos as $genero)
            @if ($genero->id == $pelicula->genre_id))
              <option value="{{$genero->id}}" selected>
                {{$genero->name}}
              </option>
            @else
              <option value="{{$genero->id}}">{{$genero->name}}</option>
            @endif
          @endforeach
        </select>
      </div>
      <button type="submit" class="btn btn-primary" >Submit</button>
    </form>
    </div>
  </div>
</section>

@endsection();
