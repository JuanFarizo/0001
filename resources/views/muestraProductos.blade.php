@extends("layouts.header")

<main style="margin-top:200px">


<main class="main-products" style="margin-top:200px">

    <div class="listado-productos">
      
    <h5 class="detalle-libros"><span class="detalle-libros1">Listado de productos</span></h5>

  
   
    
         <div>
          <h3 style="text-align:center">Libros</h3>
          <div class="row justify-content-around">
          <div class="card-group" style="width:25%">            
            @foreach ($categoriaLibros as $categoria)           
              @foreach ($categoria->productos as $item)
          
            <div class="card">
              <a href="/producto/{{$item->id}}">
              <?php $imagen = $item->imagen ?>
              <img class="card-img-top" src="{{asset("storage/$imagen")}}" alt="Card image cap" class="img-thumbnail">
              <div class="card-body">
              <h5 class="card-title">{{$item->nombre}}</h5>
                <p class="card-text"><small class="text-muted">${{$item->precio}}</small></p>
              </div>
            </a>
            </div>
            @endforeach
            @endforeach
          </div>
        </div>
         </div>


         <div>
          <h3 style="text-align:center">Papeleria</h3>
          <div class="row justify-content-around">
          <div class="card-group" style="width:25%">            
            @foreach ($categoriaPapeleria as $categoria)           
              @foreach ($categoria->productos as $item)
              <a href="/producto/{{$item->id}}">
            <div class="card">
              <?php $imagen = $item->imagen ?>
              <img class="card-img-top" src="{{asset("storage/$imagen")}}" alt="Card image cap">
              <div class="card-body">
              <h5 class="card-title">{{$item->nombre}}</h5>
                <p class="card-text"><small class="text-muted">${{$item->precio}}</small></p>
              </div>
            </div>
          </a>
            @endforeach
            @endforeach
          </div>
         </div>
         </div>
      
    </div>

</main>
@extends("layouts.footer")