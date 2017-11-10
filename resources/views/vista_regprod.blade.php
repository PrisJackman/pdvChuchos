@extends('master')

@section('contenido')
<div class="jumbotron" align="center">
	<form>
  <fieldset>
    <legend>Registrar Producto</legend>
    <div class="form-group">
      <label for="exampleInputEmail1">Descripcion del producto</label>
      <input class="form-control" id="" aria-describedby="emailHelp" placeholder="Escribir Descripcion" type="text">
      <label for="exampleInputEmail1">ID de la Categoria</label>
      <input class="form-control" id="" aria-describedby="emailHelp" placeholder="Escribir el ID" type="text">
      <label for="exampleInputEmail1">Precio Unitario</label>
      <input class="form-control" id="" aria-describedby="emailHelp" placeholder="Escribir Precio" type="text">
      <br>
      <button class="btn btn-default" id="btnCategoria">Guardar</button> 
      
    </div>
	</form>
  </fieldset>
</div>

@stop
