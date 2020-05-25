@extends("layouts.libreria")
<br>
<br>
<br>
@section('title', 'Contacto')
@section('content')

    <ul style="color:red" class="errores">
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
    <main style="">
      <div class="contenedor-contacto">
        <div class="contenedor-form">

    <form class="formulario" action="/admin/contacto" method="post">
        {{csrf_field()}}
        <div class="form-group">
        <div class="">
          <strong><label for="inputName">Nombre y apellido</label></strong>
          <input type="text" class="form-control" id="inputName" placeholder="Nombre y apellido" required value>
        </div>
         <br>
        <div class="">
          <strong><label for="email">Email</label></strong>
          <input type="email" class="form-control" id="email" placeholder="name@example.com" required value>
        </div>
        <br>
        <div class="">
          <strong><label for="inputName">Asunto</label></strong>
          <input type="text" class="form-control" id="inputName" placeholder="Asunto del mensaje" required value>
        </div>
       <br>
        <div class="">
          <strong><label for="exampleFormControlTextarea1">Descripción</label></strong>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Escriba su mensaje" required value></textarea>
        </div>
      <br>
     <div class="container-fluid">
       <button class="btn btn" style="background-color:#ff89c0; color:rgb(255, 255, 243)" type="submit">Guardar</button>
       <a href="/inicio" class="btn btn-default" style="background-color:#ff89c0; color:rgb(255, 255, 243);">Cancelar</a>
      </div>
    
      </div>
     </form>
    
   </div>
  </div>
</main>

@endsection
