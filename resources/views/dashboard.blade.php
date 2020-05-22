@extends('layouts.master')

@section('title', 'Dashboard')
@section('content')
<div class="container-fluid">
	<table class="table" style="background-color: #fff">
		
		<thead style="background-color: #face92">
		  <tr>
			<th scope="col">ID</th>
			<th scope="col">Nombre</th>
			<th scope="col">Descripción</th>
			<th scope="col">Precio</th>
			<th scope="col">Stock</th>
			<th scope="col">Categoría</th>
			<th scope="col"></th>
			<th scope="col"></th>
			<th scope="col"></th>
		  </tr>
		</thead>
	
		@foreach ($productos as $producto)
		<tbody>
			<tr>
				<td>{{$producto->id}}</td>
				<td>{{$producto->nombre}}</td>
				<td>{{$producto->descripcion}}</td>
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
	<div class="">
		  {{$productos->links()}}
	  </div>	
</div>
</div>

 
@endsection

