@extends("layouts.master")


@section('title', 'F.A.Q')

@section('content')

<div class="container-fluid">
        <div class="panel shadow">
         <div class="header">
          <h2 class="title"><i class="fas fa-question-circle"></i>  Preguntas frecuentes</h2>   
        </div>

      <form action="/faq/" method="post">
        {{csrf_field()}}
          <div class="form-row" style="padding:25px 25px;">
          <div class="col-md-6 mb-3">
            <strong><label for="inputName">Nombre</label></strong>
            <input type="text" class="form-control" id="inputName" value="">
          </div>
      
        <div class="col-md-6 mb-3">
          <strong><label for="exampleFormControlTextarea1">Descripción</label></strong>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
        </div>
        <div class="container-fluid">
            <button class="btn btn" style="background-color:#ff89c0; color:rgb(255, 255, 243)" type="submit">Guardar</button>
            <a href="/admin" class="btn btn-default" style="background-color:#ff89c0; color:rgb(255, 255, 243);">Cancelar</a>
           </div>
         
             </div>
            </form>
         
         </div>
         </div> 

        
@endsection