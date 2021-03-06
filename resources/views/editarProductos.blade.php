@extends('layouts.master')

@section('title', 'Editar productos')

@section('breadcrumb')
<li class="breadcrumb-item">
  <a href="{{ url('/admin/producto') }}"><i class="fas fa-boxes"></i>  Productos</a>
<li class="breadcrumb-item">
  <a href=""><i class="fas fa-edit"></i>  Editar</a>
</li>
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
    <h2 class="title"><i class="fas fa-edit"></i>  Editar producto</h2>   
  </div>


<form action="/admin/producto/{{$producto->id}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    @method('PUT')

    <div class="form-row" style="padding:25px 25px;">
    <div class="col-md-6 mb-3">
      <strong><label for="inputName">Nombre</label></strong>
      <input type="text" class="form-control" id="inputName" value="{{$producto->nombre}}" name="nombre">
    </div>

  <div class="col-md-6 mb-3">
    <strong><label for="exampleFormControlTextarea1">Descripción</label></strong>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="descripcion">{{$producto->descripcion}}</textarea>
  </div>

  <div class="form-group col-md-4">
    <strong><label for="precio">Precio</label></strong>
    <input type="number" class="form-control" id="precio" step="1" value="{{$producto->precio}}" name="precio">
  </div>

    <div class="form-group col-md-4">
      <strong><label for="stock">Stock</label></strong>
      <input type="number" class="form-control" id="stock" value="{{$producto->stock}}" name="stock">
    </div>

    <div class="form-group col-md-6">
    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="imagen">
    <label class="custom-file-label" for="inputGroupFile01">Subir imagen</label>
  </div>

    <div class="form-group col-md-12">
      <strong><label for="categoria">Categoría</label></strong>
      <div class="form-group col-md-3">
      <select class="custom-select" id="categoria_id" name="categoria_id">
        <option value="">-- Escoja la categoría --</option>
        @foreach ($categorias as $categoria)
        <option value="{{ $categoria->id }}">{{ $categoria->nombre}}</option>
            @endforeach
      </select>
    </div>
   </div>
 <div class="container-fluid">
   <button class="btn btn" style="background-color:#ff89c0; color:rgb(255, 255, 243)" type="submit">Guardar</button>
   <a href="/admin/producto" class="btn btn-default" style="background-color:#ff89c0; color:rgb(255, 255, 243);">Cancelar</a>
  </div>

    </div>
</form>

</div>
</div>              

@endsection
