@extends("layouts.header")

<main class="main-products" style="margin-top:200px">

    <div class="listado-productos">
      
    <h5 class="detalle-libros"><span class="detalle-libros1">Listado de productos</span></h5>

    <section>
      <h3 style="text-align:center">Libros</h3>

      <div class="row justify-content-around">
                
        @foreach ($categoriaLibros as $categoria)           
          @foreach ($categoria->productos as $item)
      
        <div class="col-sm-9 col-md-6 col-lg-4">
          <div class="card" style="padding-top:20px; margin-top:20px; margin-bottom:20px; width: 281px">
          <a class="enlace" href="/producto/{{$item->id}}">
          <?php $imagen = $item->imagen ?>
          <img class="img-thumbnail" src="{{asset("storage/$imagen")}}" alt="Card image cap" style="height:300px; margin:10px auto;display:block; border-radius:15px">
          <div class="card-body">
          <h4 class="card-title">{{$item->nombre}}</h4>
            <p class="card-text"><small class="text-muted">${{$item->precio}}</small></p>
          </div>
        </a>
        </div>
      </div>
        @endforeach
        @endforeach
      </div>
      </section>
    </div>
</main>
</main>

<section>
  <h3 style="text-align:center">Papeleria</h3>
  <div class="row justify-content-around">
    @foreach ($categoriaPapeleria as $categoria)           
      @foreach ($categoria->productos as $item)
    <div class="col-sm-9 col-md-6 col-lg-4">
      <div class="card" style="padding-top:20px; margin-top:20px; margin-bottom:50px; width: 281px;">
      <a class="enlace" href="/producto/{{$item->id}}">
      <?php $imagen = $item->imagen ?>
      <img class="img-thumbnail" src="{{asset("storage/$imagen")}}" alt="Card image cap" style="width:250px; height:250px">
      <div class="card-body">
      <h4 class="card-title">{{$item->nombre}}</h4>
        <p class="card-text"><small class="text-muted">${{$item->precio}}</small></p>
      </div>
    </a>
    </div>
  </div>
    @endforeach
    @endforeach
  </div>
  </section>
  
  @extends("layouts.footer")