@extends("layouts.libreria")
<br>
<br>
<br>
<br>
<br>
<br>
@section('title', $categoria->nombre)
@section('content')

<div class="justify-content-start" style="padding-left: 10px">
  
  <div class="row justify-content-end">
    {{-- aca pinto el fondo de rosa para que se vea la cantidad de margen que tiene y que hace que no se vea bien--}}
  @foreach ($productosFiltrados as $producto)
  <div class="col-4" style="background-color:rgb(241, 192, 230);">
    <a href="/producto/{{$producto->id}}"><img class="image" src="{{asset("storage/$producto->imagen")}}" alt=""></a>
      <h4 class="card-title" ><strong>{{$producto->nombre}}</strong></h4>
      <p class="card-text"><small class="text-muted">${{$producto->precio}}</small></p>
  </div>
  @endforeach
  </div>

 <div class="d-none d-md-block" style="">
  <div style="width: 18rem; background-color:rgb(248, 0, 103)">
   <div class="card-header">
    <h5 style="font-family: 'Fredoka One', cursive; text-transform: uppercase; color: whitesmoke">Libros</h5>
  </div>
  <ul class="list-group list-group-flush">
    @foreach ($categorias as $categoria)
    @if ($categoria->esLibro == 1)
    <li class="list-group-item">
      <a class="categorias" href="{{route('libros', ['categoria' => $categoria->id])}}" class="enlace-1">
        {{$categoria->nombre}}</a>
      </li>
    
    @endif
    @endforeach
    </ul>
  </div>
 


<div class="" style="padding-left: 10px">
  <div class="d-none d-md-block" style="">
<div class="" style="width: 18rem; background-color:rgb(248, 0, 116); margin-top:20px;">
  <div class="card-header">
    <h5 style="font-family: 'Fredoka One', cursive; text-transform: uppercase; color: whitesmoke">Categorías</h5>
  </div>
  <ul class="list-group list-group-flush">
    @foreach ($categorias as $categoria)
    @if ($categoria->esLibro == 0)
    <li class="list-group-item">
    <a class="categorias" href="{{route('papeleria', ['categoria' => $categoria->id])}}" class="enlace-1">{{$categoria->nombre}}</a>
  </li>
    @endif
    @endforeach
  </ul>
 </div>
  </div>
</div>
</div>

</div>
  
  
@endsection