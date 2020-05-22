@extends('layouts.master')

@section('title', 'Usuarios')
@section('breadcrumb')
@show

@section('content')
<div class="container-fluid">
<table class="table" style="background-color: #fff; width:40%;">
	
	<thead style="background-color: #face92">
	  <tr>
        <th scope="col">ID</th>
		<th scope="col">Nombre</th>
		<th scope="col">Apellido</th>
        <th scope="col">Email</th>
        <th scope="col">Rol</th>
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
          @elseif(!$usuario->isAdmin)
          usuario normal
          @endif
      </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="container-fluid">
      {{$usuarios->links()}}
  </div>	
</div>
@endsection