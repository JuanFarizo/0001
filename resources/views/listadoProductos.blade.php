@extends('layouts.master')

@section('title', 'Productos')

@section('breadcrumb')
<li class="breadcrumb-item">
  <a class="bread" href="{{ url('/admin/producto') }}"><i class="fas fa-boxes"></i>  Productos</a>
  <li class="breadcrumb-item">
	<a class="bread" href="/admin/producto/create"><i class="fas fa-plus"></i>  Agregar producto</a>
  </li>
</li>
@endsection

@section('content')

<div class="container-fluid">
    <div class="panel shadow">
     <div class="header">
      <h2 class="title"><i class="fas fa-users"></i>  Productos</h2>   
    </div>
  <div class="inside">
  <table class="table">
    <thead>
      <tr>
        <td><strong>ID</strong></td>
        <td><strong>Nombre</strong></td>
        <td><strong>Descripción</strong></td>
        <td><strong>Precio</strong></td>
		<td><strong>Stock</strong></td>
		<td><strong>Categoria</strong></td>
		<td><strong>Tipo</strong></td>
		<td><strong>Opciones</strong></td>
      </tr>
    </thead>
    @foreach ($productos as $producto)
		<tbody>
			<tr>
				<td>{{$producto->id}}</td>
				<td>{{$producto->nombre}}</td>
				<td>{{$producto->descripcion}}</td>
				<td>{{$producto->precio}}</td>
				<td>{{$producto->stock}}</td>
				<td>
					 @foreach ($categorias as $categoria)
						@if ($producto->categoria_id == $categoria->id)
				  {{$categoria->nombre}}
			  </td>
				<td>
					@if ($categoria->esLibro == 1)
						Libro
					@else
						Papeleria
					@endif
				</td>
				@endif
				@endforeach
				<div class="">
				<td><button style="background-color:#42a5f5" class="btn btn"><a href="/producto/{{$producto->id}}"><i class="fas fa-eye"></i></a></button></td>
				<td><button style="background-color:#00cc66" class="btn btn"><a href="producto/{{$producto->id}}/edit"><i class="far fa-edit"></i></a></button></td>
				<td><form action="producto/{{$producto->id}}/" method="post">
					{{csrf_field()}}
					{{method_field('DELETE')}}
					<button style="background-color:#ef5350" class="btn btn" type="submit"><i class="fas fa-trash"></i></button>
					</form>
				
				</td>
			</tr>
		</div>
		</tbody>
		@endforeach
</table>
</div>
</div>
</div>
<div class="container-fluid" style="margin-top: 10px">
{{$productos->links()}}
</div>
@endsection