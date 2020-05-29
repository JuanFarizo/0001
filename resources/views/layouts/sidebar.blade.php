<div class="sidebar shadow">
      <div class="section-top">
      <div class="container" style= "text-align:center">
      <img class="logo" style="width:40px; height:40px;" src="{{asset("img/libro-grande.png")}}" alt="icono"><h1 style= "font-size:x-large">Libreria Lablic</h1>
      </div>
      <div class="user">
        <span class="subtitle">Hola Administrador/a:</span>
        <div class="name">
        {{Auth::user()->name}} {{Auth::user()->lastname}}
        </div>
      </div>
      </div>
    
      <div class="main">
      <ul>
      <li>
        <a class="enlace" href="/admin"><i class="fas fa-table"></i>  Dashboard</a>
      </li>
      
      <li>
        <a class="enlace" href="/admin/categoria"><i class="fas fa-stream"></i>  Categorías</a>
      </li>
      <li>
        <a class="enlace" href="/admin/producto"><i class="fas fa-boxes"></i>  Productos</a>
      </li>
      <li>
        <a class="enlace" href="/admin/usuarios"><i class="fas fa-users"></i>  Usuarios</a>
      </li>
      <li>
        <a class="enlace" href="/admin/contacto"><i class="fas fa-laptop"></i>  Consultas</a>
      </li>
      <li>
        <a class="enlace" href="/admin/pedido"><i class="fas fa-truck"></i>  Pedidos</a>
      </li>
      <li>
        <a class="enlace" href="/admin/faq/create"><i class="fas fa-question-circle"></i>  Preguntas frecuentes</a>
      </li>
      </ul>
      </div>
    </div>
