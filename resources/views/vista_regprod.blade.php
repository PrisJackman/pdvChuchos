@extends('master')
@section('contenido')

<form >
  <div>
    <label>Nombre:</label>
    <input type="text" class="form-control" >
  </div>
  <div>
    <label>Precio:</label>
    <input type="text" class="form-control">
  </div>
  <br>

  <div class="form-group">
      <label for="exampleSelect1">Categorias</label>
      <select class="form-control">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>

<table class="table table-striped table-hover table-bordered">
  <thead class="thead-dark">
    <tr>
      <th>#</th>
      <th>Ingredientes</th>
      <th>Cantidad</th>
      <th>Agregar</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Column content</td>
      <td></td>
      <td>
        <button type="button" class="btn btn-success">
        <span  class="glyphicon glyphicon-plus"></span>
        </button>
      </td>
    </tr>
    <tr>
      <td>2</td>
      <td>Column content</td>
      <td></td>
      <td>
      <button type="button" class="btn btn-success" >
         <span  class="glyphicon glyphicon-plus"></span>

      </button></td>
    </tr>
  </tbody>
</table> 
   <button type="button" class="btn btn-success">Registrar</button>
</form> 


@stop
