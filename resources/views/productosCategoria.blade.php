@extends("layouts.header")

<main class="main-products" style="margin-top:200px">

    <div class="listado-productos">
   
    <h5 class="detalle-libros"><span class="detalle-libros1">{{$categoria->nombre}}</span></h5>
 <br>
  <div class="d-none d-lg-block">
 <ul class="list-group list-group-flush" style="width: 15%">
  <li class="list-group-item">Cras justo odio</li>
  <li class="list-group-item">Dapibus ac facilisis in</li>
  <li class="list-group-item">Morbi leo risus</li>
  <li class="list-group-item">Porta ac consectetur ac</li>
  <li class="list-group-item">Vestibulum at eros</li>
</ul>
</div>

      <section>
        <div class="row justify-content-center">
          @foreach ($productosFiltrados as $producto)
          <div class="col-sm-9 col-md-6 col-lg-4">
          <div class="card" style="padding-top:20px; margin-top:20px; margin-bottom:20px; width: 315px">
        <table>
            <tr>
               
            <a href="/producto/{{$producto->id}}"><img class="image" src="{{asset("storage/$producto->imagen")}}" alt=""></a>
            </tr>
        </table>
            <div class="card-body">
              <h4 class="card-title" ><strong>{{$producto->nombre}}</strong></h4>
              <p class="card-text"><small class="text-muted">${{$producto->precio}}</small></p>
            </div>
          </div>
          </div>
          @endforeach
        </section>
        
        </div>
       
    </main>

    @extends("layouts.footer")