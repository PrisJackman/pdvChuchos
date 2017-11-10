<html>
<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="{{asset("css/bootstrap.css")}}">
 <!-- <link rel="stylesheet" type="text/css" href="{{asset("css/Estilos.css")}}">-->
  <script src="{{asset("js/jquery-3.2.1.js")}}"></script>  
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{url('/')}}">Home</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{{url('/registrar_venta')}}">Caja</a></li>
        <li><a href="#">Inventario</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mas Opciones <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{url('/registrar_productos')}}"">Registrar Productos</a></li>
            <li><a href="{{url('/consulta_productos')}}">Consultar Productos</a></li>
            <li class="divider"></li>
            <li><a href="{{url('/registrar_categorias')}}">Registrar Categorias</a></li>
            <li class="divider"></li>
            <li><a href="#">Registrar Materia prima</a></li>
            <li><a href="{{url('/consulta_matprima')}}">Consultar Mat. prima</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('logout') }}"
           onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
                            Salir
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
            </form>
            </a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-xs-12">
      @yield('contenido')
    </div>
  </div>
</div>

<script src="{{asset("js/bootstrap.js")}}"></script>
</body>
</html>