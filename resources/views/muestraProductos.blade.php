@extends("layouts.header")

<main style="margin-top:200px">


<main class="main-products" style="margin-top:200px">

    <div class="listado-productos">
      
    <h5 class="detalle-libros"><span class="detalle-libros1">Listado de productos</span></h5>

  <div class="">
      <table class="d-none d-lg-block">
      @foreach ($categorias as $categoria)
      <tr>
        <td><a href="{{route('libros', ['categoria' => $categoria->id])}}">{{$categoria->nombre}}</a></td>
      </tr>
      @endforeach
      </table>

      <h3 style="text-align: center"> Libros </h3>
        <section>
        <div class="row justify-content-around">
          @foreach ($productos as $producto)
          @if ($producto->esLibro)
          <div class="col-sm-9 col-md-6 col-lg-4">
            <div class="card" style="width:250px" aligne="center">
  
              <table>
              <tr style="padding-top:10px">
                <?php $imagen = $producto->imagen ?>
              <a href="/producto/{{$producto->id}}"><img class="image" src="{{asset("storage/$imagen")}}" alt="" width="250px" height="250px"></a>
            </tr>
          </table>
  
              <div class="card-body">
                
                    
                
                <h4 class="card-title" ><strong>{{$producto->nombre}}</strong></h4>
                <p class="card-text">${{$producto->precio}}</p>
              </div>
            </div>
            </div>
            
            
                    
          @endif
          @endforeach
          
        </section>
        <div class="row">
          <div class="col-12 d-flex justify-content-center">
            {{$productos->links()}} 
           </div>
          </div> 
        


          <h3 style="text-align: center"> Libreria </h3>
        <section>
        <div class="row justify-content-around">
          @foreach ($productos as $producto)
          @if (!$producto->esLibro)
          <div class="col-sm-9 col-md-6 col-lg-4">
            <div class="card" style="width:250px" align="center">
  
              <table>
              <tr style="padding-top:10px">
                <?php $imagen = $producto->imagen ?>
              <a href="/producto/{{$producto->id}}"><img class="image" src="{{asset("storage/$imagen")}}" alt="" width="250px" height="250px"></a>
            </tr>
          </table>
  
              <div class="card-body">
                
                    
                
                <h4 class="card-title" ><strong>{{$producto->nombre}}</strong></h4>
                <p class="card-text">${{$producto->precio}}</p>
              </div>
            </div>
            </div>
            
            
                    
          @endif
          @endforeach
          
        </section>
        <div class="row">
          <div class="col-12 d-flex justify-content-center">
            {{$productos->links()}} 
           </div>
          </div> 
        </div>
       

    </div>

</main>
@extends("layouts.footer")