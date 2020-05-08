
{{-- @extends('layouts.app')  --}}
@extends('layouts.headerdash') 

<title>Dashboard - {{Auth::user()->name}}</title>

@section('encabezado')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-2 menuLateral">
			<div class="row">
				<div class="col-md-12">
					<h3 class="text-primary text-left">
                        Categorias:
                    </h3>
                    <a href="/admin/categoria">Listado</a>
                    <br>
                    <a href="/admin/categoria/create">Cargar</a>
                    <br>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h3 class="text-primary text-left">
						Productos:
                    </h3>
                    <a href="/admin/producto">Listado</a>
                    <br>
                    <a href="/admin/producto/create">Cargar</a>
                    <br>
                    
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h3 class="text-primary">
                        Consultas:
                    </h3>
                    <a href="/admin/contacto">Lista</a>
                    <br>
                    <a href="">Carga</a>
				</div>
			</div>
		</div>
		<div class="col-md-10 cuerpoDash">
			@yield('contenido')
		</div>
	</div>
</div>

@endsection
