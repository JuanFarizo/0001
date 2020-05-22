@extends("layouts.header")
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<main>
    <div class="container">
    <h2> {{$producto->nombre}}</h2>
    <div class="container">
    <ul>
<div style= "float:right">
        <li>
    <strong>{{"Nombre"}}:</strong>
     {{$producto->nombre}}
     <br>
     <strong>{{"Descripcion"}}:</strong>
    {{$producto->descripcion}}
    <br>
    <strong>{{"Categoria"}}:</strong>
    {{$producto->categorias->nombre}}
    <br>
    <strong>{{"Precio"}}:</strong>
        ${{$producto->precio}}
</div>
    <br>
    <div>
        <img src="/storage/{{$producto->imagen}}" height= "200px">
       </div>
       <br>
       <div>
       <a href="/carrito/{{$producto->id}}" class="btn btn-primary" type="button">Comprar</a>
     </div>
       <br>
       <br>
       <a href="/productos"><input type="submit" value="Volver"></a>
        </li>
    </ul>
    </div>
</div>
</main>

@extends("layouts.footer")