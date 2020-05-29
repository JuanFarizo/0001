@extends("layouts.libreria")

@section('title', 'Preguntas Frecuentes')

@section('content')
<div align="center"; style="margin-top:225px">
 
  <section style="box-shadow: 3px 5px 5px #999; width:70%;">
  <div class="contenedor">
    <img src="img/fondo.jpg" alt="" style="width:100%; border-radius: 5px;">
  </div>


    <div class="container">
              @if (isset($preguntas))
                  
            
      @foreach ($preguntas as $pregunta)

        <h2 class="preguntas" style="text-shadow:none; letter-spacing:0px;"><strong>{{$pregunta->nombre}}</strong></h2>
          <p style="text-align: left">{{$pregunta->descripcion}}</p>
    

      @endforeach
      @endif
      </div>
    </section>
@endsection