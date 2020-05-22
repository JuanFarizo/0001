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

<div class="container col-md-6">
  <div class="contenedor-form">
  <form action="/admin/producto" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
  <div>
      <strong><label for="nombre">Nombre: </label></strong>
      <br>
      <input type="text" name="nombre" value="{{old("nombre")}}">
  </div>
  <br>

   <div>
    <strong><label for="">Descripción: </label></strong>
   </div>
  <div>

   <textarea id="descripcion" name="descripcion" value="{{old("descripcion")}}" placeholder="Escriba el contenido.."></textarea>
  </div>
  <br>

  <div>
    <strong><label for="precio">Precio: </label></strong>
      <br>
      <input type="number" name="precio" step="1" value="{{old("precio")}}">
     </div>
     <br>
     <div>
       <strong><label for="stock">Stock: </label></strong>
         <br>
     <input type="number" name="stock" value="{{old("stock")}}">
        </div>
        <br>
  <div>
    <strong><label for="imagen">Imagen: </label></strong>
      <input type="file" name="imagen" id="imagen">
    </div>
    <br>    
    <br>
    <div>
      <strong><label for="">Categoría: </label></strong>
      <select name="categoria_id" id="categoria_id">
        <option value="">-- Escoja la categoría --</option>
        @foreach ($categorias as $categoria)
        <option value="{{ $categoria->id }}">{{ $categoria->nombre}}</option>
            @endforeach
          </select>
    </div>
    <br>
    <button type="submit">Guardar</button>
    <a href="/admin/producto" class="btn btn-default">Cancelar</a>
</form>
</div>
</div>
