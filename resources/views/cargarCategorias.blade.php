@extends('layouts.dash')

@section('contenido')
<ul style="color:red" class="errores">
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    </ul>
<form action="/admin/categoria" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
<div>
    <strong><label for="nombre">{{"Nombre"}}: </label></strong>
    <br>
    <input type="text" name="nombre" value="">
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
    <strong><label for="imagen">Imagen: </label></strong>
      <input type="file" name="imagen" id="imagen">
    </div>
<div>
    <strong><label for="imagen">Seleccione el tipo  de categoria a cargar:  </label></strong>
    <input type="radio" name="esLibro" value="1"> Libro	
    <input type="radio" name="esLibro" value="0"> Papeleria	
  </div>
<button type="submit">Guardar</button>
<a href="/admin/categoria" class="btn btn-default">Cancelar</a>
</form>
</div>
</div>
</section>
@endsection