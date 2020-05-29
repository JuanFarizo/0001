@extends('layouts.master')

@section('title', 'Preguntas frecuentes')

@section('breadcrumb')
<li class="breadcrumb-item">
  <a class="bread" href="{{ url('/admin/preguntas') }}"><i class="fas fa-question-circle"></i>  Preguntas frecuentes</a>
  <li class="breadcrumb-item">
    <a class="bread" href="/admin/faq/create"><i class="fas fa-plus"></i>  Agregar Pregunta Frecuente</a>
    </li>
  </li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="panel shadow">
     <div class="header">
      <h2 class="title"><i class="fas fa-question-circle"></i>  Preguntas frecuentes</h2>   
    </div>
  <div class="inside">
  <table class="table">
    <thead>
      <tr>
        <td><strong>ID</strong></td>
        <td><strong>Nombre</strong></td>
        <td><strong>Descripción</strong></td>
      </tr>
    </thead>
    <tbody>
      @foreach($preguntas as $pregunta)
      <tr>
        <td>{{$pregunta->id}}</td>
        <td>{{$pregunta->nombre}}</td>
        <td>{{$pregunta->descripcion}}</td>
        <td>
         
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </div>
</div>

@endsection