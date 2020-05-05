@extends('layouts.dash')

@section('contenido')
<h1>Listado de Productos:</h1>   

  


<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<tr>
						<th>
							id_Producto
						</th>
						<th>
							Nombre
						</th>
						<th>
							Descripcion
						</th>
						<th>
							Stock
						</th>
						<th>
							Categoria
						</th>
					</tr>
				</thead>
				@foreach ($productos as $producto)
				<tbody>
					<tr>
						<td>
							{{$producto->id}}
						</td>
						<td>
							{{$producto->nombre}}
						</td>
						<td>
							{{$producto->descripcion}}
						</td>
						<td>
							{{$producto->stock}}
						</td>
						<td>
							 @foreach ($categorias as $categoria)
								@if ($producto->categoria_id == $categoria->id)
									{{$categoria->nombre}}
								@endif
							@endforeach
						</td>
						<td><button style="background-color:#42a5f5" class="btn btn-primary1"><a href="producto/{{$producto->id}}/edit">Editar</a></button></td>
						<td><form action="producto/{{$producto->id}}/" method="post">
							{{csrf_field()}}
							{{method_field('DELETE')}}
							<button style="background-color:#ef5350" class="btn btn-primary1" type="submit">Eliminar</button>
							</form>  </td>
					</tr>
					
				</tbody>
				@endforeach    
			</table>
		</div>
	</div>
</div>
    <div class="container">
		{{$productos->links()}}
	</div>
@endsection







