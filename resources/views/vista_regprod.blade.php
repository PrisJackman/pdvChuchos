@extends('master')

@section('contenido')
<div class="jumbotron" align="center">
	<form action="{{url('guardarProductos')}}" method="POST">
  <fieldset>
    <legend>Registrar Producto</legend>
    <div class="form-group">
      <label for="nombre">Descripcion del producto</label>
      <input class="form-control" id="" aria-describedby="emailHelp" placeholder="Escribir Descripcion" type="text" name="nombre">
      <label for="categoria">Categoria:</label>
      <select name="categoria" class="form-control">
        @foreach($categorias as $c)
        <option value="{{$c->id}}">{{$c->descripcion}}
        
      </option>
      @endforeach
      
      </select>
      <label for="precio_unitario">Precio Unitario</label>
      <input class="form-control" id="" aria-describedby="emailHelp" placeholder="Escribir Precio" type="text" name="precio_unitario">
      <br>
      <button class="btn btn-default" id="btnCategoria">Guardar</button> 
      
    </div>
	</form>
  </fieldset>
</div>

@stop
