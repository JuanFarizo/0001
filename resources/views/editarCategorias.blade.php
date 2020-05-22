@extends('layouts.dash')

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<ul style="color:red" class="errores">
  @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
  @endforeach
  </ul>
<h2>Editar categoría</h2>
 
<div class="contenedor-form">
<form action="/admin/categoria/{{$categoria->id}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    @method('PUT')
    <strong><label for="nombre">{{$categoria->nombre}}: </label></strong>
    <br>
    <input type="text" name="nombre" value="{{$categoria->nombre}}">
    <br>
    <br>
    <div>
     <strong><label for="">Descripción: </label></strong>
    </div>
   <div>

    <textarea id="descripcion" name="descripcion">{{$categoria->descripcion}}</textarea>
   </div>
   <br>
    <div>
      <strong><label for="imagen">Imagen: </label></strong>
        <input type="file" name="imagen" id="imagen">
      </div>
    <div>
      <strong><label for="imagen">Seleccione el tipo  de categoria:  </label></strong>
      <input type="radio" name="esLibro" value="1"> Libro
      <input type="radio" name="esLibro" value="0"> Papeleria
    </div>
    <button type="submit">Guardar</button>
  <a href="/admin/categoria" class="btn btn-default">Cancelar</a>
</form>
</div>

