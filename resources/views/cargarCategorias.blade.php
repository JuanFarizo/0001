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
<button type="submit">Guardar</button>
<a href="/admin/categoria" class="btn btn-default">Cancelar</a>
</form>
</div>
</div>
</section>
@endsection