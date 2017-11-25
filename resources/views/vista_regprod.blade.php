@extends('master')
@section('contenido')
<div class="col-lg-8 col-md-7 col-sm-6">
  <h1>Registro de Productos</h1>
</div>

<form >
 <br><br><br><br>
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
    <label for="categorias">Categoria:</label>
    <select name="categorias" class="form-control">
      @foreach($categorias as $c)
          <option value="{{$c->id}}">{{$c->descripcion}}
          </option>
      @endforeach
    </select>
  </div>

<table class="table table-striped table-hover table-bordered ">
    <thead class="thead-dark">
      <tr class="info">
        <th>ID</th>
        <th>Nombre</th>
        <th>Categoria</th>
        <th>Precio Unitario</th>
      </tr>
    </thead>
    <tbody>
      @foreach($productos as $prod)
      <tr>
        <td>{{$prod->id}}</td>
        <td>{{$prod->descripcion}}</td>
        <td>{{$prod->nom_categoria}}</td>
        <td>{{$prod->precio_unitario}}</td>
      </tr>
      @endforeach
    </tbody>
  </table> 

   <button type="button" class="btn btn-success">Registrar</button>
</form> 
@stop
