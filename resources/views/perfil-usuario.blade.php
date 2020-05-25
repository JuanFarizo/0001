@extends("layouts.libreria")
@section('title', 'Mi perfil')
@section('content')

<div class="container-login">
<div class="card bg-light" style="width:50%">
  <div class="card-header" style="background-color: #fde3a3; width:100%;">
    <h2 class="title"><i class="fas fa-user"></i>Información</h2>
  </div>
  <div class="">
    <img id="avatar-usuario" src="/storage/avatars/{{Auth::user()->avatar}}" style="margin-top:15px; box-shadow: 8px 8px 5px #aaaaaa" alt="">
  </div>
  <div class="inside">
      <span class="title"><i class="far fa-address-card"></i><strong>Nombre y Apellido:</strong></span>
      <span class="text">{{Auth::user()->name}} {{Auth::user()->lastname}}</span>
</div>

      <div class="inside"v>
      <span class="title"><i class="far fa-envelope"></i> <strong>Email:</strong></span>
      <span class="text">{{Auth::user()->email}}</span>
    </div>
      <br>
  
<div style="margin-bottom:19px; margin-top:19px">
  <a href="/perfil-usuario/{{Auth::user()->id}}/edit" class="btn btn-primary" type="button">Editar</a>
  </div>
</div>
</div>

@endsection