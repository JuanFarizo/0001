@extends('layouts.master')

@section('title', 'Pedidos')

@section('breadcrumb')
<li class="breadcrumb-item">
  <a class="bread" href="{{ url('/admin/pedidos') }}"><i class="fas fa-truck"></i>  Pedidos</a>
</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="panel shadow">
     <div class="header">
      <h2 class="title"><i class="fas fa-truck"></i>  Pedidos</h2>   
    </div>
  <div class="inside">
  <table class="table">
    <thead>
      <tr>
        <td><strong>ID</strong></td>
        <td><strong>Items</strong></td>
        <td><strong>Estado</strong></td>
        <td><strong>Total</strong></td>
        <td><strong>Usuario_id</strong></td>
      </tr>
    </thead>
    <tbody>
      {{-- @foreach($usuarios as $usuario)
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
      @endforeach --}}
    </tbody>
  </table>
  </div>
  </div>
</div>
{{-- <div class="container-fluid" style="margin-top: 10px">
{{$usuarios->links()}}
</div> --}}
@endsection