@extends("layouts.libreria")

@section('title',"$producto->nombre")

@section('content')

<div class="row justify-content-center" style="margin-top:225px;">
    <div class="col-3">
    <img src="/storage/{{$producto->imagen}}" height= "300px">
   </div>

    <div class="col-4">
    <h2 style="text-align: center"> {{$producto->nombre}}</h2>
  
<div>
    <ul class="">
        <li>
     <strong>{{"Descripcion"}}:</strong>
   <div style="text-align: left">{{$producto->descripcion}}</div>

    <strong>{{"Categoria"}}:</strong>
    {{$producto->categorias->nombre}}
    <br>
    <strong>{{"Precio"}}:</strong>
        ${{$producto->precio}}
   </li>
  </ul>
 </div>

        <div>
       <a href="/carrito/{{$producto->id}}" class="btn btn" style="background-color:rgb(255, 4, 129); color:#fff" type="button">Añadir al carrito <i class="fas fa-shopping-cart" style="color:rgb(255, 246, 246); .fa-shopping-cart:hover:none"></i></a>
       </div>   
 </div>
</div>
        
      </div>
   </div>
  </div>
</div>

@include('sweetalert::alert')
@endsection