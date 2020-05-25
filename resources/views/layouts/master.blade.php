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
    <link rel="shortcut icon" href="{{asset("img/librito-icono.ico")}}"/>
    <title>Dashboard @yield('title') - Libreria Lablic</title>
  </head>
  <body class="dashboard">
    <div class="wrapper">
      <div class="col1">@include('layouts.sidebar')</div>
      <div class="col2">
      <nav class="navbar navbar-expand-lg shadow">
       <div class="collapse navbar-collapse">
         <ul class="navbar-nav">
           <li class="nav-item">
             <a href="{{url('/inicio')}}" class="nav-link"><i class="fas fa-home"></i> Home</a>
           </li>
           <li class="nav-item">
            <a href="{{url('/admin')}}" class="nav-link"><i class="fas fa-table"></i>  Dashboard</a>
          </li>
         </ul>
       </div>
       </nav>
      
       <div class="page">
       <div class="container-fluid">
        <nav aria-label="breadcrumb shadow">
         <ol class="breadcrumb">
          <li class="breadcrumb-item">
         <a href="{{url('/admin')}}" class="nav-link1"><i class="fas fa-table"></i>  Dashboard</a>
        </li>
        @section('breadcrumb')
          @show
         </ol>

        </nav>
      </div>

      @section('content')
          @show

     </div>
     </div>
    </div>
  </body>
</html>