@extends('master')

@section('contenido')
<div class="jumbotron" align="center">
	<form>
  <fieldset>
    <legend>Registrar Categorias</legend>
    <div class="form-group">
      <label >Descripcion de la Categoria</label>
      <input class="form-control" id="txtDescripcionCategoria" placeholder="Escriba la descripcion de la categoria" type="text">
      <br>
      <button class="btn btn-default" id="btnCategoria">Guardar</button> 
      
    </div>
	</form>
  </fieldset>
</div>

@stop
