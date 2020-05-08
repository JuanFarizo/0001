@extends("layouts.header")
<main class="main-products" style="margin-top:200px">

    <div class="listado-productos">
   
    <h5 class="detalle-libros"><span class="detalle-libros1">{{$categoria->nombre}}</span></h5>
 <br>
  <div class="">
    <table class="d-none d-lg-block">
      <td><h5>Libros</h5></td>
      @foreach ($categorias as $categoria)
      @if ($categoria->esLibro == 1)
      <tr>
        <td><a href="{{route('libros', ['categoria' => $categoria->id])}}">{{$categoria->nombre}}</a></td>
      </tr>
      @endif
      @endforeach
     <td><h5>Papeleria</h5></td>
      @foreach ($categorias as $categoria)
      @if ($categoria->esLibro == 0)
      <tr>
        <td><a href="{{route('papeleria', ['categoria' => $categoria->id])}}">{{$categoria->nombre}}</a></td>
      </tr>
      @endif
      @endforeach
     
      </table>

      <section>
        <div class="row justify-content-around">
          @foreach ($productosFiltrados as $producto)
          <div class="col-sm-9 col-md-6 col-lg-4">
          <div class="card" style="width:250px" align="center">
        <table>
            <tr>
               
            <a href="/producto/{{$producto->id}}"><img class="image" src="{{asset("storage/$producto->imagen")}}" alt="" width="250px" height="250px"></a>
            </tr>
        </table>
            <div class="card-body">
              <h4 class="card-title" ><strong>{{$producto->nombre}}</strong></h4>
              <p class="card-text">${{$producto->precio}}</p>
            </div>
          </div>
          </div>
          @endforeach
        </section>
        
        </div>
       

    </div>

      </div>

    </main>

    @extends("layouts.footer")