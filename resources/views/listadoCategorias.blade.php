@extends('layouts.dash')

@section('contenido')
                
<h1>Listado de Categorias:</h1>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<tr>
						<th>
							id_Categoria
						</th>
						<th>
							Nombre
						</th>
						<th>
							Descripcion
						</th>
						<th>
							Tipo
						</th>
					
					</tr>
				</thead>
				@foreach ($categorias as $categoria)
				<tbody>
					<tr>
						<td>
							{{$categoria->id}}
						</td>
						<td>
							{{$categoria->nombre}}
						</td>
						<td>
							{{$categoria->descripcion}}
						</td>   
						<td>
							@if ($categoria->esLibro)
							Libro	
							@else
							Papeleria
							@endif		
						</td>      
						<td><button style="background-color:#42a5f5" class="btn btn-primary1"><a href="categoria/{{$categoria->id}}/edit">Editar</a></button></td>
						<td><form action="categoria/{{$categoria->id}}/" method="post">
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
		{{$categorias->links()}}
	</div>
@endsection


