@extends('layouts.master')

@section('title', 'Editar categorias')

@section('breadcrumb')
<li class="breadcrumb-item">
<a class="bread" href="{{'/admin/categoria'}}"><i class="fas fa-stream"></i> Categorías</a>
</li>
@endsection

@section('content')

{{-- <ul style="color:red" class="errores">
  @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
  @endforeach
  </ul> --}}

<div class="container-fluid">
  <div class="panel shadow">
    
   <div class="header">
    <h2 class="title"><i class="fas fa-edit"></i>  Editar categoría</h2>   
  </div>


<form action="/admin/categoria/{{$categoria->id}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    @method('PUT')

    <div class="form-row" style="padding:25px 25px;">
    <div class="col-md-6 mb-3">
      <strong><label for="inputName">Nombre</label></strong>
      <input type="text" class="form-control" id="inputName" value="{{$categoria->nombre}}" name="nombre">
    </div>

  <div class="col-md-6 mb-3">
    <strong><label for="exampleFormControlTextarea1">Descripción</label></strong>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="descripcion">{{$categoria->descripcion}}</textarea>
  </div>

  <div class="form-group col-md-6">
    <div class="input-group mb-3">
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="inputGroupFile02" name="imagen">
        <label class="custom-file-label" for="inputGroupFile02">Subir imagen</label>
      </div>
      {{-- <div class="input-group-append">
        <span class="input-group-text" id="">Upload</span>
      </div> --}}
    </div>
</div>
  
  <div class="form-group col-md-9">
    <strong><label for="imagen">Seleccione el tipo  de categoria:  </label></strong>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="esLibro" id="inlineRadio1" value="1">
      <label class="form-check-label" for="inlineRadio1">Libro</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="esLibro" id="inlineRadio2" value="0">
      <label class="form-check-label" for="inlineRadio2">Papelería</label>
    </div>
  </div>
   
 <div class="container-fluid">
   <button class="btn btn" style="background-color:#ff89c0; color:rgb(255, 255, 243)" type="submit">Guardar</button>
   <a href="/admin/categoria" class="btn btn-default" style="background-color:#ff89c0; color:rgb(255, 255, 243);">Cancelar</a>
  </div>

    </div>
</form>

</div>
</div>

@endsection
