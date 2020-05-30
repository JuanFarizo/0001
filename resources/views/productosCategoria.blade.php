@extends("layouts.libreria")

@section('title', $categoria->nombre)
@section('content')

<div class="container" style="margin-top:225px;">
  
  
  <div class="row justify-content-center">
  
  @foreach ($productosFiltrados as $producto)
  <div class="col-4" style="background-color:#fff">
    <a href="/producto/{{$producto->id}}"><img class="image" src="{{asset("storage/$producto->imagen")}}" alt=""></a>
      <h4 class="card-title" ><strong>{{$producto->nombre}}</strong></h4>
      <p class="card-text"><small class="text-muted">${{$producto->precio}}</small></p>
  </div>
  @endforeach
  </div>
  <br>

</div>

<br>
@endsection