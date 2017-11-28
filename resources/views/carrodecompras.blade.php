@extends('vista_regventa')

@Section('productosagregados')

  	<h3>Productos</h3>
	<hr>
	<div class="row">
		<div class="col-xs-12">
			<table class="table table-striped">
				<thead>
					<tr>
						<th></th>
						<th>Producto:</th>
						<th>Precio:</th>
						<th>Cantidad:</th>
						<th>Descuento:</th>
						<th>Total:</th>
					</tr>
				</thead>
				<tbody>
					@foreach($lista as $l)
					<tr>
						<td><a href="{{url('/eliminarlista')}}/{{$l->producto_id}}/{{$l->venta_id}}"><span class="btn btn-danger">X</span></a></td>
						<td>{{$l->nombre}}</td>
						<td>{{$l->precio}}</td>
						<td>{{$l->cantidad}}</td>
						<td>
					@if($l->descuento==0)
					<span class="label label-default">No descuento</span>
					@else
					{{$l->descuento*100}}%
					@endif</td>
						<td>{{$l->total}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
<div class="text-right">
	<form method="post" action="{{url('finalizar')}}/{{$ventas->id}}" class="form-horizontal">
	<input id="token" type="hidden" name="_token" value="{{csrf_token()}}">
		<label class="radio-inline"><input type="radio" name="tipodepago" value="Efectivo">Efectivo</label>
  		<label class="radio-inline"><input type="radio" name="tipodepago" value="Tarjeta">Tarjeta</label><br><br>
		$<input type="number" placeholder="0" name="pago">
		<button type="Submit" class="btn btn-info">Finalizar Venta</button>
	</form>
</div>

@stop