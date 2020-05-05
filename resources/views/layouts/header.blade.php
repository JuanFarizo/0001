<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Muli&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6ac70a7b0a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Literata:400,700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset("css/estilo.css")}}">
    <link type="" src="/storage/libro-grande.png"><title>Libreria Lablic</title>
    <link rel="icon" type="image/png" href="storage/icono-pag">
  </head>
  <body>

<!------------INICIO HEADER--------------------------------->

<header class="fixed-top">
    <img src="/storage/libro-grande.png" alt="icono">
    <h1><a  class= "logo" href="/plantilla">Libreria Lablic</a></h1>
    <div class="btn-group" role="group">
      <button id="btnGroupDrop1" type="button" class="btn btn-transparent dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img src='<?= "foto" ?>' alt="" style="height:20px; width:15px;">
      </button>
      <div class="vent-user dropdown-menu " style="position: absolute;will-change: transform;top: 0px;left: 0px;transform: translate3d(-200px, 38px, 0px);text-align-last: center;" aria-labelledby="btnGroupDrop1">
        <?php if (!Auth::check()) : ?>
          <a class="dropdown-item" href="/login">Ingresar</a>
          <a class="dropdown-item" href="/register">Registrar</a>
        <?php endif; ?>

        @if (Auth::check())
          <a class="dropdown-item" href="perfil-usuario.php">
            <span class="rounded-circle border border-primary" style="background-image: url('imagenPerfil/5df98608d726c.png'); background-size: cover;  width:42px; height: 42px;"></span>
            <!--<img src="img/icono-usuario.jpg" alt="..." class="rounded-circle" >-->
            Hola {{Auth::user()->name}}
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
          Salir
     </a>
        @endif
      </div>
    </div>

    <button onclick="location.href='carrito.php'" type="button" class="btn btn-transparent btn-compra"><i class="fas fa-shopping-cart"></i></button>
    
<!-----------BARRA DE NAVEGACIÓN--------------------------------->

    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <a class="navbar-brand" href="/inicio">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/productos">Nuestros productos</a>
          </li>
        
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Libros</a>
            <div class="dropdown-menu">
              <?php $listadoLibro = array();
                    $listadoCategoria = array()?>
              @foreach ($productos as $productos)
              <?php               
              if ($productos->esLibro){array_push($listadoLibro, $productos->categoria_id);}
              else (array_push($listadoCategoria, $productos->categoria_id))  
              ?>
              @endforeach
              <?php $limpioLibro = array_unique($listadoLibro);
              $limpioCategoria = array_unique($listadoCategoria); ?>
              @foreach ($limpioLibro as $i)
              <a class="dropdown-item" href="{{route('libros', ['categoria' => $categorias->find($i)->id])}}">{{$categorias->find($i)->nombre}}</a>
              @endforeach
              
              
              <div class="dropdown-divider"></div>
            </div>
            
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Papelería</a>
            
            <div class="dropdown-menu">
              @foreach ($limpioCategoria as $i)
            <a class="dropdown-item" href="">{{$categorias->find($i)->nombre}}</a>
              @endforeach
              <div class="dropdown-divider"></div>
            </div>

          <li class="nav-item">
            <a class="nav-link" href="">F.A.Q</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Contacto</a>
          </li>
          @if (Auth::check() && Auth::user()->isAdmin)
          <li class="nav-item">
            <a class="nav-link" href="/admin">Dashboard</a>
          </li> 
          @endif
          
         @if (Auth::check())
         <li class="nav-item">
          <a class="nav-link" href="">{{Auth::user()->name}}</a>
          </li>  
         @else
         <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Login</a>
          </li> 
         @endif
          
       
          
          <li class="nav-item">
            <a class="nav-link" href="<?php if(isset($_SESSION['usuario'])) {echo "perfil-usuario.php";} else {echo "";}?>"><?php if(isset($_SESSION['usuario'])) {echo "Perfil Usuario";}?></a>
          </li>

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
