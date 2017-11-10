@extends('master')

@section('contenido')
	
	<table class="table table-striped table-hover table-bordered ">
	  <thead class="thead-dark">
	    <tr class="info">
	      <th>ID</th>
	      <th>Nombre</th>
	      <th>Precio</th>
	      <th>Existencia</th>
	      <th>Existencia real</th>
	      <th>Merma</th>
	    </tr>
	  </thead>
	  <tbody>
	  	
	    @foreach($matprima as $mp)
	  	<tr>
	  	  <td>{{$mp->id}}</td>
	      <td>{{$mp->descripcion}}</td>
	      <td>{{$mp->precio}}</td>
	      <td>{{$mp->existencia}}</td>
	      <td>{{$mp->existencia_real}}</td>
		  <td>{{$mp->merma}}</td>
	    </tr>
	  	@endforeach
	  </tbody>
	</table> 
	
@stop