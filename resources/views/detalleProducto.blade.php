@extends("layouts.libreria")

@section('title',"$producto->nombre")

@section('content')
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<div class="row justify-content-center">
    <div class="col-3">
    <img src="/storage/{{$producto->imagen}}" height= "300px">
   </div>

    <div class="col-4">
    <h2 style="text-align: center"> {{$producto->nombre}}</h2>
  
<div>
    <ul class="col-9">
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
  <br>
        <div>
       <a href="/carrito/{{$producto->id}}" class="btn btn" style="background-color:rgb(255, 4, 129); color:#fff" type="button">Añadir al carrito <i class="fas fa-shopping-cart" style="color:rgb(255, 246, 246); .fa-shopping-cart:hover:none"></i></a>
       </div>
    
    
</div>


</div>
<div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          
        </div>
       
@endsection