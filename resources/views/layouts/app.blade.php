<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>TSII - UNDP 2022</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <meta name="theme-color" content="#563d7c">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      main > .container {
        padding: 60px 15px 0;
      }

      .footer {
        background-color: #f5f5f5;
      }

      .footer > .container {
        padding-right: 15px;
        padding-left: 15px;
      }

      code {
        font-size: 80%;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body class="d-flex flex-column h-100">
    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">UNDP 2022</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ setActive('usuarios.*') }}">
              <a class="nav-link" href="{{ route('usuarios.index') }}">Usuarios</a>
            </li>
            <li class="nav-item {{ setActive('productos.index') }}">
              <a class="nav-link" href="#">Productos</a>
            </li>
          </ul>

          <ul class="navbar-nav mt-md-0">
            @guest
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Entrar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
              </li>
            @endguest

            @auth
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Salir
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                @csrf
              </form>
            </li>
            <li class="nav-item">
              <a class="nav-link">{{ auth()->user()->name }}</a>
            </li>
            @endauth
          </ul>
          {{-- <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form> --}}
        </div>
      </nav>
    </header>
  <!-- Begin page content -->
    <main role="main" class="flex-shrink-0">
      <div class="container">

          @if(session('message'))
              <div class="alert alert-success">
                  {{ session('message') }}
              </div>
          @endif

        @yield('content')
      </div>
    </main>

    <footer class="footer mt-auto py-3">
      <div class="container">
        <span class="text-muted">Desarrollado en el 2022.</span>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>
