<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6ac70a7b0a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Lobster|Muli&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Literata:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet"> 
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset("css/estilo.css")}}">
    <link rel="shortcut icon" href="{{asset("img/librito-icono.ico")}}"/>
    <title>@yield('title') - Libreria Lablic</title>

  </head>
  <body>

<!------------INICIO HEADER--------------------------------->

<header class="fixed-top">
    <img src="{{asset("img/libro-grande.png")}}" alt="icono">
    <h1><a  class= "logo" href="/inicio">Libreria Lablic</a></h1>
    <div class="btn-group" role="group">
      <button id="btnGroupDrop1" type="button" class="btn btn-transparent dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        @if (Auth::check())
        <img src="/storage/avatars/{{ auth()->user()->avatar}}" alt="" style="height:24px; width:26px; border-radius: 14px; margin-top: 11px;">
        @endif

      </button>
      <button onclick="location.href='/carrito'" type="button" class="btn btn-transparent btn-compra"><i class="fas fa-shopping-cart"></i></button>
      <div class="vent-user dropdown-menu " style="position: absolute;will-change: transform;top: 0px;left: 0px;transform: translate3d(-200px, 38px, 0px);text-align-last: center;" aria-labelledby="btnGroupDrop1">
        @if (!Auth::check())
          <a class="dropdown-item" href="/login">Ingresar</a>
          <a class="dropdown-item" href="/register">Registrar</a>
        @endif

        @if (Auth::check())
          <a class="dropdown-item" href="/perfil-usuario/id">
            <img class="avatar" src="/storage/avatars/{{ auth()->user()->avatar}}" alt="">
            Hola {{Auth::user()->name}}
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
             document.getElementById('logout-form').submit();"> Salir </a>
        @endif
      </div>
    </div>

<!-----------BARRA DE NAVEGACIÓN--------------------------------->

    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <a class="navbar-brand" href="/inicio"><i class="fas fa-home"></i> Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/productos"><i class="fas fa-boxes"></i> Nuestros productos</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-book-open"></i> Libros</a>
            <div class="dropdown-menu">
              @if (isset($categorias))              
              @foreach ($categorias as $item)
              @if ($item->esLibro == 1)
              <a class="dropdown-item" href="{{route('libros', ['categoria' => $item->id])}}">{{$item->nombre}}</a>
              @endif
              @endforeach
              @endif
              <div class="dropdown-divider"></div>
            </div>
            
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-pencil-alt"></i> Papelería</a>

            <div class="dropdown-menu">
              @if (isset($categorias))
              @foreach ($categorias as $item)
              @if ($item->esLibro == 0)
              <a class="dropdown-item" href="{{route('papeleria', ['categoria' => $item->id])}}">{{$item->nombre}}</a>
            @endif
              @endforeach
              @endif
              <div class="dropdown-divider"></div>
            </div>

          <li class="nav-item">
            <a class="nav-link" href="/faq"><i class="fas fa-question-circle"></i> F.A.Q</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacto"><i class="fas fa-laptop"></i> Contacto</a>
          </li>
          @if (Auth::check() && Auth::user()->isAdmin)
          <li class="nav-item">
            <a class="nav-link" href="/admin"><i class="fas fa-user-shield"></i> Dashboard</a>
          </li>
          @endif

         @if (Auth::check())
         <li class="nav-item">
          <a class="nav-link" href="/perfil-usuario/id">{{Auth::user()->name}}</a>
          </li>
         @else
         <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Login</a>
          </li>
         @endif
        </ul>

<!------------BUSCADOR DE LA NAVEGACION--------------------------------->
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Ingresa palabra clave">
          <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
            <i class="fas fa-search"></i>
          </button>
        </form>
        <br>
      </div>
    </nav>
  </header>
  
<!-----------CONTENIDO DE LA PÁGINA---------->

  <main role="main" class="container-fluid">
    @yield('content')
</main>
 
<!-----------FOOTER---------->
<footer class="">
  <div class="footer">
      <div class="row" style="margin-right: 0px">
        <div class="col-sm-6 ubicacion">
          <h4>Ubicación</h4>
          <p>Mitre 100</p>
          <p>Rosario,Santa Fe</p>
          <p> © 2019-2020 Todos los derechos reservados</p>
        </div>
        <div class="col-sm-6">
          <h4>Encontranos en nuestras redes</h4>
          <div class="sociales">
            <button type="button" name="button"><i class="fab fa-linkedin"></i></button>
            <button type="button" name="button"><i class="fab fa-instagram"></i></button>
            <button type="button" name="button"><i class="fab fa-facebook"></i></button>
            <button type="button" name="button"><i class="fab fa-twitter"></i></button>
          </div>
        </div>
      </div>
    </div>
</footer>