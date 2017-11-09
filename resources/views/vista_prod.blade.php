@extends('master')

@section('contenido')
	
	<table class="table table-striped table-hover table-bordered ">
	  <thead class="thead-dark">
	    <tr class="info">
	      <th>No.</th>
	      <th>Nombre</th>
	      <th>Categoria</th>
	      <th>Precio Unitario</th>
	    </tr>
	  </thead>
	  <tbody>
	    @foreach($productos as $prod)
	  	<tr>
	      <td>{{$prod->descripcion}}}</td>
	      <td>{{$prod->nom_categoria}}</td>
	      <td>{{$prod->precio_unitario}}}</td>
	    </tr>
	  	@endforeach
	  </tbody>
	</table> 
	
@stop