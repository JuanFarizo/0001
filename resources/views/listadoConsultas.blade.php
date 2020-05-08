@extends('layouts.dash')

@section('contenido')
@foreach ($contactos as $item)
<div class="accordion" id="accordionExample">  
    <div class="card">      
        <div class="card-header" id="headingOne{{$item->id}}">
        <h2 class="mb-0">
          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne{{$item->id}}" aria-expanded="false" aria-controls="collapseOne{{$item->id}}">
            {{$item->tema}}
          </button>
        </h2>
        </div>  
      <div id="collapseOne{{$item->id}}" class="collapse" aria-labelledby="headingOne{{$item->id}}" data-parent="#accordionExample">
        <div class="card-body">
            Nombre: {{$item->nombre}}
        </div>
        <div class="card-body">
            Email: {{$item->email}}
        </div>
        <div class="card-body">
            Mensaje: {{$item->cuerpo}}
        </div>
      </div> 
    </div>
    
    @endforeach
@endsection
