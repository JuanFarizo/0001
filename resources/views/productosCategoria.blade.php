@extends("layouts.libreria")
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
@section('title', $categoria->nombre)
@section('content')

<div class="d-none d-md-block" style="">
  <ul class="" style="margin-bottom: 100px; width:15%">
  <li class="list-group-item" style="background-color: #f7fc9e;"><h5 style="color: black">Libros</h5></li>
  @foreach ($categorias as $categoria)
    @if ($categoria->esLibro == 1)
    <li class="list-group-item">
      <a href="{{route('libros', ['categoria' => $categoria->id])}}" class="enlace-1">
        {{$categoria->nombre}}</a>
    @endif
    @endforeach
  </li>
</li>

  <li class="list-group-item" style= "background-color:#f7fc9e; margin-top:25px;"><h5 style="color: black">Papelería</h5></li>
    @foreach ($categorias as $categoria)
    @if ($categoria->esLibro == 0)
    <li class="list-group-item">
    <a href="{{route('papeleria', ['categoria' => $categoria->id])}}" class="enlace-1">{{$categoria->nombre}}</a>
    @endif
    @endforeach
  </li>
   </ul>
  </div>

  <div class="row justify-content-around" style="position: relative; bottom: 500px; margin-left: 200px">
    @foreach ($productosFiltrados as $producto)
    <div class="" style="width:25%;">
    <div class="card" style="">
      <a href="/producto/{{$producto->id}}"><img class="image" src="{{asset("storage/$producto->imagen")}}" alt=""></a>
      
      <div class="card-body">
        <h4 class="card-title" ><strong>{{$producto->nombre}}</strong></h4>
        <p class="card-text"><small class="text-muted">${{$producto->precio}}</small></p>
      </div>
    </div>
    </div>
    @endforeach
</div>

@endsection