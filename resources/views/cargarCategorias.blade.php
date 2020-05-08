@extends('layouts.dash')

@section('contenido')
<form action="/admin/categoria" method="post">
    {{csrf_field()}}
<div>
    <strong><label for="nombre">{{"Nombre"}}: </label></strong>
    <br>
    <input type="text" name="nombre" value="">
</div>
<br>
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