@extends("layouts.libreria")

@section('title', 'Preguntas Frecuentes')

@section('content')
<div style="margin-top:235px">
    <h2 class = "titulo" style="text-align:center">Preguntas Frecuentes</h2>

    <div class="container">
              @if (isset($preguntas))
                  
            
      @foreach ($preguntas as $pregunta)

        <h4>{{$pregunta->nombre}}</h4>
          <p>{{$pregunta->descripcion}}</p>
        </div>

      @endforeach
      @endif
      </div>
@endsection