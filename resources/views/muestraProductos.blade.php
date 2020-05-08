@extends("layouts.header")

<main style="margin-top:200px">


<main class="main-products" style="margin-top:200px">

    <div class="listado-productos">
      
    <h5 class="detalle-libros"><span class="detalle-libros1">Listado de productos</span></h5>

  
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
    
         <div>
          <h3>Libros</h3>
          <div class="card-group" style="width:25%">            
            @foreach ($categoriaLibros as $categoria)           
              @foreach ($categoria->productos as $item)
            <div class="card">
              <?php $imagen = $item->imagen ?>
              <img class="card-img-top" src="{{asset("storage/$imagen")}}" alt="Card image cap" class="img-thumbnail">
              <div class="card-body">
              <h5 class="card-title">{{$item->nombre}}</h5>
                <p class="card-text">{{$item->descripcion}}</p>
                <p class="card-text"><small class="text-muted">${{$item->precio}}</small></p>
              </div>
            </div>
            @endforeach
            @endforeach
          </div>
         </div>


         <div>
          <h3>Papeleria</h3>
          <div class="card-group" style="width:25%">            
            @foreach ($categoriaPapeleria as $categoria)           
              @foreach ($categoria->productos as $item)
            <div class="card">
              <?php $imagen = $item->imagen ?>
              <img class="card-img-top" src="{{asset("storage/$imagen")}}" alt="Card image cap">
              <div class="card-body">
              <h5 class="card-title">{{$item->nombre}}</h5>
                <p class="card-text">{{$item->descripcion}}</p>
                <p class="card-text"><small class="text-muted">${{$item->precio}}</small></p>
              </div>
            </div>
            @endforeach
            @endforeach
          </div>
         </div>
      
    </div>

</main>
@extends("layouts.footer")