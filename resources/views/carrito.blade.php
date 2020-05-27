@extends("layouts.libreria")
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
@section('title', 'Carrito')

@section('content')
<h3>Carrito de compras</h3>
<br>
<div class="container">
  @if(session('carrito'))
  <table class="table table-bordered">
  
    <thead>
      <tr>
        <th>Producto</th>
        <th>Precio</th>
        <th>Cantidad</th>
        <th>Subtotal</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
     
      @foreach(session('carrito') as $key => $producto)
      
      <tr>
        <td>
          <img src="/storage/{{ $producto['imagen'] }}" alt="" style = "height:130px"> {{ $producto['nombre'] }}
        </td>
        <td>$ {{ $producto['precio'] }}</td>
        <td>
          {{$producto['cantidad'] }}
        </td>
        <td>${{$producto['precio'] * $producto['cantidad']}}</td>
        <td><a href="{{ route('carrito-delete', $key)}}" class="btn btn-danger">
          <i class="far fa-trash-alt"></i>
          </a>
        </td>
      </tr>
    
    @endforeach
  </tbody>
  </table>
  @php
      $carrito = session()->get('carrito');
        $total = 0;
        foreach($carrito as $producto){
            $total += $producto['precio'] * $producto['cantidad'];
        }
        $total;
  @endphp
<div class="alert alert-info text-center"><b>Total a pagar: </b>$ {{ $total}}</div>


  <div class="container" style="display: flex; justify-content:space-between">
    <a href="/productos" class= "btn btn-primary">Seguir comprando</a>

    <a href="" class= "btn btn-primary">Finalizar compra</a>
  </div>
  @else
  <h3><span class="label label-warning">El carrito está vacío</span></h3>
  @endif

</div>
@endsection