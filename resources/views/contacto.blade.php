@extends("layouts.header")

<main>
    <ul style="color:red" class="errores">
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>

   <div class="contenedor-contacto">
      <div class="contenedor-form" style="margin-top:200px">
        <h2>Contacto</h2>
        <form class="formulario" action="/contacto" method="post">
            {{csrf_field()}}
          <label for=""><strong>Nombre</strong></label>
          <input type="text" name="nombre" id="nombre" placeholder="Nombre y apellido" required value>
          <label for=""><strong>Correo</strong></label>
          <input type="email" name="email" id="email" placeholder="Correo" required value>
          <label for=""><strong>Asunto</strong></label>
          <input type="text" name="tema" id="tema" placeholder="Asunto del mensaje">
          <label for=""><strong>Mensaje</strong></label>
          <textarea type="mensaje" name= "cuerpo" id="mensaje" placeholder="Escriba su mensaje" required></textarea>
          <button class="boton-enviar" type="submit" value="Enviar" name="submit">Enviar</button>
        </form>
        <a href="/inicio" class="boton-enviar"><button class="boton-enviar" type="submit" value="Enviar" name="submit">Cancelar</button></a>
      </div>
    </div>
</main>
@extends("layouts.footer")