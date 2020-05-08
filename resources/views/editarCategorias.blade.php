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
    <div>
      <strong><label for="imagen">Seleccione el tipo  de categoria:  </label></strong>
      <input type="radio" name="esLibro" value="1"> Libro
      <input type="radio" name="esLibro" value="0"> Papeleria
    </div>
    <button type="submit">Guardar</button>
  <a href="/admin/categoria" class="btn btn-default">Cancelar</a>
</form>
</div>
@endsection

