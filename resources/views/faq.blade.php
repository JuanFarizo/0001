@extends("layouts.libreria")


@section('title', 'F.A.Q')

@section('content')
<section style="margin-top:235px">
    <h2 class = "titulo" style="text-align:center">Preguntas Frecuentes</h2>

    <div class="row justify-content-around">
              
      @foreach ($preguntas as $pregunta)

        <h4 class="card-title">{{$pregunta->nombre}}</h4>
          <p class="card-text">{{$pregunta->descripcion}}</p>
        </div>

      @endforeach
    
    </section>
@endsection