@extends('layouts.master')

@section('title', 'Usuarios')

@section('breadcrumb')
<li class="breadcrumb-item">
  <a class="bread" href="{{ url('/admin/usuarios') }}"><i class="fas fa-users"></i>  Usuarios</a>
</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="panel shadow">
     <div class="header">
      <h2 class="title"><i class="fas fa-users"></i>  Usuarios</h2>   
    </div>
  <div class="inside">
  <table class="table">
    <thead>
      <tr>
        <td><strong>ID</strong></td>
        <td><strong>Nombre</strong></td>
        <td><strong>Apellido</strong></td>
        <td><strong>Email</strong></td>
        <td><strong>Rol</strong></td>
      </tr>
    </thead>
    <tbody>
      @foreach($usuarios as $usuario)
      <tr>
        <td>{{$usuario->id}}</td>
        <td>{{$usuario->name}}</td>
        <td>{{$usuario->lastname}}</td>
        <td>{{$usuario->email}}</td>
        <td>
          @if($usuario->isAdmin)
           {{$usuario->isAdmin}} (administrador)
           @else
           usuario normal
         @endif
        
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </div>
</div>
<div class="container-fluid" style="margin-top: 10px">
{{$usuarios->links()}}
</div>
@endsection