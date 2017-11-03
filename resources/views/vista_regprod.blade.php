@extends('master')

@section('contenido')
<div class="jumbotron" align="center">
	<form>
  <fieldset>
    <legend>Legend</legend>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" type="email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
	</form>
  </fieldset>
</div>

@stop
