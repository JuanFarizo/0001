@extends("layouts.header")
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<main>
    <div class="container">
    <h2> {{$item->nombre}}</h2>
    <div class="container">
    <ul>
<div style= "float:right">
        <li>
    <strong>{{"Nombre"}}:</strong>
     {{$item->nombre}}
     <br>
     <strong>{{"Descripcion"}}:</strong>
    {{$item->descripcion}}
    <br>
    <strong>{{"Categoria"}}:</strong>
    {{$item->categorias->nombre}}
    <br>
    <strong>{{"Precio"}}:</strong>
        ${{$item->precio}}
</div>
    <br>
    <div>
        <img src="/storage/{{$item->imagen}}" height= "200px">
       </div>
       <br>
       <div>
       <input type="submit" value="Agregar al carrito">
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