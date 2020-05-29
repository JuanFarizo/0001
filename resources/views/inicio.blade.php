@extends("layouts.libreria")
@section('title', 'Home')
@section('content')
    <main style="margin-top:200px" >
      @if (session('success_message'))
          <div class="alert alert-success"> 
            {{session('success_message')}}
          </div>
            @endif
        <div id="carouselExampleIndicators" class="carousel slide d-none d-md-block" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/librosclasicos.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/mago-de-oz.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/el-pricipito.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                  <img src="img/rayuela2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/peter-pan.jpg" class="d-block w-100" alt="...">
                  </div>
                <div class="carousel-item">
                    <img src="img/orgullo-y-prejuicio.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                      <img src="img/el-quijote.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/garcia-marquez.jpg" class="d-block w-100" alt="...">
                      </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <br>

<section>
  <div class="container">
  <h2>Libros</h2>

  <div class="row">

        <div class="card-deck">
          
          @foreach ($categorias as $item)
          @if ($item->esLibro == 1)
              
          
          <div class="card">
            
            <a href="{{route('libros', ['categoria' => $item->id])}}"><img src="{{asset("storage/$item->imagen")}}" class="card-img-top" alt="..."></a>
          <div class="card-body">
            
          <h5 class="card-title"><strong>{{$item->nombre}}</strong></h5>
          <p class="card-text">{{$item->descripcion}}</p>
          <div class = "button-link"><a href="{{route('libros', ['categoria' => $item->id])}}" class="btn btn-primary">Ver Productos</a></div>
          </div>
        </div>
        @endif
        @endforeach   
        </div>
      </div>       
      </section>
    
   <div class="row">
      <section>
        <h2>Papeleria</h2>
      
              <div class="card-deck">
                
                @foreach ($categorias as $item)
                @if ($item->esLibro == 0)
               
                <div class="card">
                  
                <a href="{{route('papeleria', ['categoria' => $item->id])}}"><img src="{{asset("storage/$item->imagen")}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                <h5 class="card-title"><strong>{{$item->nombre}}</strong></h5>
                <p class="card-text">{{$item->descripcion}}</p>
                <div class = "button-link"><a href="{{route('papeleria', ['categoria' => $item->id])}}" class="btn btn-primary">Ver Productos</a></div>
                </div>
              </div>
              @endif
              @endforeach  
              </div>         
            </section>
    
        </div>
        </div>
    </main>
<br>







@include('sweetalert::alert')
 @endsection