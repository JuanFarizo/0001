@extends("layouts.libreria")

@section('content')

<div class="container-login">
<form action="/perfil-usuario/{{auth()->user()->id}}" method="post">
  @method('PUT')
  @csrf
 <div class="card bg-light" style="width:136%">
    <div class="card-header" style="background-color: #fde3a3; width:100%">
      <h2 class="title"><i class="fas fa-user"></i> Editar perfil </h2>
    </div>
    <img id="avatar-usuario" src="/storage/avatars/{{$usuario->avatar}}" alt="">
   <div><i class="fas fa-camera"></i></div>
    
<div class="form-group">
  <label for="exampleInputNombre" style="margin-top:10px"><i class="far fa-address-card"></i> <strong>Nombre: </strong></label>
  <input type="text" class="form-control" id="exampleInputNombre" value="{{$usuario->name}}">
</div>

<div class="form-group">
  <label for="exampleInputApellido"><i class="far fa-address-card"></i> <strong>Apellido: </strong></label>
  <input type="text" class="form-control" id="exampleInputEmail1" value="{{$usuario->lastname}}">
</div>

<div class="form-group">
  <label for="exampleInputEmail1"><i class="far fa-envelope"></i> <strong>Email: </strong></label>
  <input type="email" class="form-control" id="exampleInputEmail1" value="{{$usuario->email}}">
</div>


<div style="margin-bottom:19px; margin-top:19px">
<button type="submit" class="btn btn-primary" value="Guardar">Guardar</button>
<button type="submit" class="btn btn-primary" value="Cancelar">Cancelar</button>
</div>
</div>
</form>
</div>


@endsection
