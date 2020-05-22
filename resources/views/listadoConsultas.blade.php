@extends('layouts.master')

@section('title', 'Consultas')

@section('content')
<div class= "container-fluid">
<div class="row">
@foreach ($contactos as $item)

    <div class="col-md-4" style="padding-top: 10px; padding-left:40px">
      @if ($item->respondida)
      <div class="card text-white bg-info" >
      @else
      <div class="card text-white bg-danger">
      @endif
			
				<h3 style="margin-top:10px; text-align:center">{{$item->tema}}</h3>
				<div class="card-body" style="width:100%">
					<p class="card-text">
						{{$item->cuerpo}}
					</p>
				</div>
				<div class="card-footer"  style="width:100%">
          Nombre: {{$item->nombre}} <br>
          Email: {{$item->email}} <br>
          Estado: @if ($item->respondida)
              {{"Atendida"}}
          @else
        {{"Pendiente"}} <form  action="contacto/{{$item->id}}" method="POST" >
                {{csrf_field()}}
              @method('PUT')
              <button type="submit">Cambiar Estado</button>
            </form>  
          @endif
				</div>
			</div>
		</div>

@endforeach

</div>
</div>
</div>
    
    <div class="container-fluid">
      {{$contactos->links()}}
    </div>
@endsection
