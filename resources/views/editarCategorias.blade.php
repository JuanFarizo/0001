@extends('layouts.dash')

@section('contenido')
<h2>Editar categoría</h2>
 
<div class="contenedor-form">
<form action="/admin/categoria/{{$categoria->id}}" method="post">
    {{csrf_field()}}
    @method('PUT')
    <strong><label for="nombre">{{"Nombre"}}: </label></strong>
    <br>
    <input type="text" name="nombre" value="{{$categoria->nombre}}">
    <br>
    <button type="submit">Guardar</button>
  <a href="/admin/categoria" class="btn btn-default">Cancelar</a>
</form>
</div>
@endsection

