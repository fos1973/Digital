@extends('layouts.template')

@section('section')

<section class="col-12 col-lg-8">
  <ul class="list-group col-12 ">
      <li class="list-group-item active">Peliculas Random</li>
      @foreach ($movies as $m)
        <li class="list-group-item">
          <a href="/peliculas/detalle/{{$m->id}}">{{$m->title}}</a>
        </li>
      @endforeach
  </ul>

</section>
@endsection

@section('aside')
<section class="col-12 col-lg-4">
  <ul class="list-group col-12">
      <li class="list-group-item active">Ultimas 5 Pelicula</li>
      @foreach ($ultimas as $m)
        <li class="list-group-item">
          <a href="/peliculas/detalle/{{$m->id}}">{{$m->title}}</a>
        </li>
      @endforeach
  </ul>
</section>
@endsection
