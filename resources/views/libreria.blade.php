<!-- <div class="container"> -->
      @extends("layouts.header")

    <main style="margin-top:200px" >
        <div id="carouselExampleIndicators" class="carousel slide d-none d-md-block" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/librosclasicos.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/mago-de-oz.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/el-pricipito.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                  <img src="img/rayuela2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/peter-pan.jpg" class="d-block w-100" alt="...">
                  </div>
                <div class="carousel-item">
                    <img src="img/orgullo-y-prejuicio.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                      <img src="img/el-quijote.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/garcia-marquez.jpg" class="d-block w-100" alt="...">
                      </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <br>

<section>
  <h2>Libros</h2>
 
        <div class="card-deck">
          
          @for ($i = 0; $i < 3; $i++)             
          <?php $imagen = $libros[$numerosUno[$i]]->imagen ?>
         
          <div class="card">
            <a href="/utiles"><img src="{{asset("storage/$imagen")}}" class="card-img-top" alt="..."></a>
          <div class="card-body">
          <h5 class="card-title"><strong>{{$libros[$numerosUno[$i]]->nombre}}</strong></h5>
          <p class="card-text">{{$libros[$numerosUno[$i]]->descripcion}}</p>
          <div class = "button-link"><a href="{{route('libros', ['categoria' => $libros[$numerosUno[$i]]->categoria_id])}}" class="btn btn-primary">Ver Productos</a></div>
          </div>
        </div>
          @endfor
        </div>         
      </section>


      <section>
        <h2>Papeleria</h2>
       
              <div class="card-deck">
                
                @for ($i = 0; $i < 2; $i++)             
                <?php $imagen = $papeleria[$numerosDos[$i]]->imagen ?>
               
                <div class="card">
                  <a href="/utiles"><img src="{{asset("storage/$imagen")}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                <h5 class="card-title"><strong>{{$papeleria[$numerosDos[$i]]->nombre}}</strong></h5>
                <p class="card-text">{{$papeleria[$numerosDos[$i]]->descripcion}}</p>
                <div class = "button-link"><a href="/{{$categorias->find($papeleria[$i]->categoria_id)->nombre}}" class="btn btn-primary">Ver productos</a></div>
                </div>
              </div>
                @endfor
              </div>         
            </section>
    </main>
    @extends("layouts.footer")