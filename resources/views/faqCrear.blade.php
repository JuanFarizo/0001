@extends("layouts.master")


@section('title', 'F.A.Q')

@section('content')

<div class="container-fluid">
        <div class="panel shadow">
         <div class="header">
          <h2 class="title"><i class="fas fa-question-circle"></i>  Preguntas frecuentes</h2>   
        </div>

      <form action="/admin/faq/create" method="post" enctype="multipart/form-data">
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

        <h6 class="pregunta"><strong>¿Cómo es la forma de pago?</strong></h6>
        <p> Se podrá pagar los pedidos con: Tarjeta de crédito, Tarjeta de débito, Transferencia Bancaria o Efectivo a través de PagoFacil o RapiPago.
        </p>
        <h6 class="pregunta"><strong>¿Cuál es el plazo de pago para efectuar la compra?</strong></h6>
        <p>Si se realizó el pago con Tarjeta de Débito o Crédito la acreditación es instantánea. En caso que el pago se realice en Efectivo (Rapipago/PagoFacil) o Transferencia, una vez realizado hay tiempo hasta 72hs hábiles para poder pagarlo. En caso de no recibir pago, la plataforma cancela automáticamente el pedido.</p>
        <h6 class="pregunta"><strong>¿Cómo se realiza el envío y cuál es el costo?</strong></h6>
        <p>El envío se realiza por OCA y el costo del envío depende del domicilio de entrega y se detalla antes de finalizar la compra. El envío gratuito es a partir de $2000.</p>
        <h6 class="pregunta"><strong>¿Cuánto tarda en llegar el pedido?</strong></h6>
        <p>Los envíos se realizan en un plazo entre 3 y 10 días hábiles dependiendo de la región.</p>
        <h6 class="pregunta"><strong>¿Qué pasa si no se retira el pedido por la Sucursal de OCA a tiempo?</strong></h6>
        <p>En caso de no retirar el pedido dentro de los 4 o 5 días hábiles desde que el pedido está disponible para su retiro en OCA, el pedido vuelve al remitente. Esto demora unos días (aproximadamente una semana), y se deberá reprogramar el envío. El costo de este envío debe ser abonado nuevamente.</p>
        <h6 class="pregunta"><strong>¿Cómo se realiza el seguimiento del pedido? </strong></h6>
        <p>En el mismo momento en que se realiza la compra, se recibe un mail de confirmación de Compra con un link donde se podrá realizar seguimiento todo el tiempo del envío. Al realizar el Pago se recibirá otro mail y otro cuando se realice el pedido.
        </p>
        
        <br>
        <br>
      </div>
    </div>

@endsection