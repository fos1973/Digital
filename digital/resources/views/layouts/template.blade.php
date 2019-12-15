<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title></title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-5 ">
    <a class="navbar-brand" href="/peliculas/">Mis Peliculas</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/peliculas/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/peliculas/titulos">Listado</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/api/peliculas/api">Api</a>
        </li>

        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">
                  Ingresar
                </a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">
                      Registrarse
                    </a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        Salir
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest

      </ul>
      <form class="form-inline my-2 my-lg-0" action="/peliculas/buscar">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="termino" >
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
</header>
    <main >
      <div class="row d-flex ml-2">
            @yield('section')
            @yield('aside')
      </div>
    </main>
    <footer>
        <div class="text-light bg-primary p-2 mt-5 d-flex flex-row justify-content-end pr-4" >
        Mis Peliculas
        </div>
    </footer>
  </body>
</html>
