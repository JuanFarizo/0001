@extends('layouts.master')

@section('title', 'Pedidos')

@section('breadcrumb')
<li class="breadcrumb-item">
  <a class="bread" href="{{ url('/admin/pedidos') }}"><i class="fas fa-truck"></i>  Pedidos</a>
</li>
@endsection

@section('content')
<div class= "container-fluid">
<div class="row">
@foreach ($pedidos as $pedido)

    <div class="col-md-4" style="padding-top: 10px; padding-left:40px">
      @if ($pedido->estado)
      <div class="card text-white bg-success" >
      @else
      <div class="card text-white bg-danger">
      @endif
			
				<h3 style="margin-top:10px; text-align:center">Nro de pedido: {{$pedido->id}}</h3>
				<div class="card-body" style="width:100%">
					<p class="card-text">
						@foreach ($pedido->items as $item)
            Articulo: {{$item['nombre']}}
            Precio: ${{$item['precio']}}
            Cantidad: {{$item['cantidad']}}
           <br>
          @endforeach
					</p>
				</div>
				<div class="card-footer"  style="width:100%">
          Nombre: {{$usuarios->find($pedidos[0]->user_id)->name}} <br>
          Apellido: {{$usuarios->find($pedidos[0]->user_id)->lastname}} <br>
          Total: {{$pedido->total}} <br>
          Estado: @if ($pedido->estado)
              {{"Preparado"}}
          @else
        {{"Pendiente"}} <form  action="pedido/{{$pedido->id}}" method="POST" >
                {{csrf_field()}}
              @method('PUT')
              <button type="submit">Cambiar Estado</button>
            </form>  
          @endif
				</div>
			</div>
		</div>

@endforeach

</div>
</div>
</div>
    
<div class="container-fluid">
  {{$pedidos->links()}}
</div>
@endsection
