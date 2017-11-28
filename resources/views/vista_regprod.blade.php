@extends('master')
@section('contenido')
<div class="col-lg-8 col-md-7 col-sm-6">
  <h1>Registro de Productos</h1>
</div>

<form action="{{url('guardar_productos')}}" method="POST">
<input id="token" type="hidden" name="_token" value="{{csrf_token()}}">
 <br><br><br><br>
  <div>
    <label>Nombre:</label>
    <input type="text" class="form-control"  name="nombre">
  </div>

  <div>
    <label>Precio:</label>
    <input type="text" class="form-control" name="precio">
  </div>
  <br>

 <div class="form-group">
    <label for="categorias">Categoria:</label>
    <select name="categorias" class="form-control">
      @foreach($categorias as $c)
          <option value="{{$c->id}}">{{$c->descripcion}}
          </option>
      @endforeach
    </select>
  </div>


   <button type="submit" class="btn btn-success">Registrar</button>
</form> 
@stop
