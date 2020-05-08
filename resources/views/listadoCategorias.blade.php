@extends('layouts.dash')

@section('contenido')
<h1>Listado de categorias:</h1>   
<ul>
  
@foreach ($categorias as $item)
<li>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h3> {{$item->nombre}}</h3>
                @if (isset($mensaje))
                <p>{{$mensaje}}</p>
                @endif 
                <div class="row">
                    <button style="background-color:#42a5f5" class="btn btn-primary1"><a href="categoria/{{$item->id}}/edit">Editar</a></button>
                    <form action="categoria/{{$item->id}}/" method="post">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <button style="background-color:#ef5350" class="btn btn-primary1" type="submit">Eliminar</button>
                    </form>  
                     
                </div>
            </div>
        </div>
    </div>
    </li> 
     <br>
    
@endforeach    
</ul>
@endsection



