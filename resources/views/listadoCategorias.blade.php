@extends('layouts.master')

@section('title', 'Categorias')

@section('breadcrumb')
<li class="breadcrumb-item">
<a class="bread" href="{{'/admin/categoria'}}"><i class="fas fa-stream"></i> Categorías</a>
<li class="breadcrumb-item">
	<a class="bread" href="/admin/categoria/create"><i class="fas fa-plus"></i>  Agregar categoría</a>
  </li>
</li>
@endsection

@section('content')
 <div class="container-fluid">
  <div class="panel shadow">
   <div class="header">
    <h2 class="title"><i class="fas fa-stream"></i> Categorías</h2>   
  </div>
<div class="inside">
<table class="table">
<thead>
    <tr>
    <td><strong>ID</strong></td>
    <td><strong>Nombre</strong></td>
    <td><strong>Descripción</strong></td>
    <td><strong>Tipo</strong></td>
    <td><strong>Opciones</strong></td>
    </tr>
</thead>
@foreach ($categorias as $categoria)
    <tbody>
        <tr>
            <td>{{$categoria->id}}</td>
            <td>{{$categoria->nombre}}</td>
            <td>{{$categoria->descripcion}}</td>
            <td>@if($categoria->esLibro)
             Libro
             @else
             Papelería
             @endif
            </td>
            <td><button style="background-color:#42a5f5;" class="btn btn-primary1">
                <a href="categoria/{{$categoria->id}}/edit"><i class="far fa-edit"></i></a></button>
            </td>
            <td><form action="categoria/{{$categoria->id}}/" method="post">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <button style="background-color:#ef5350;" class="btn btn-primary1" type="submit"><i class="fas fa-trash"></i></button></button>
                </form></td>
        </tr>
    </tbody>
@endforeach
</table>
</div>
 </div>
</div>

@endsection