
<link rel="stylesheet" type="text/css" href="{{ asset('/bower_components/boostrap/dist/css/bootstrap.min.css') }}">


<H3>FORMULARIO DE TRABAJADORES</H3>



<form id="trabajadores_add" method="POST" action="{{ route('trabajador.add') }}">
	{{ csrf_field() }}
	<div>
		  <div class="form-group">
		<label>Codigo del Trabajador:</label>
		<input type="" id="cod_trabajador" name="cod_trabajador" class="form-control">
	</div>
	<div class="form-group">
		<label>Id Cargo:</label>
		<input type="" id="id_cargo" name="id_cargo" class="form-control">
	</div>
	<div class="form-group">
		<label>Tiempo:</label>
		<input type="" id="tiempo" name="tiempo" class="form-control">
	</div>
	<div class="form-group">
		<label>Horario:</label>
		<input type="" id="horario" name="horario" class="form-control">
	</div>
	
	<divclass="form-group">
		<button type="submmit" class="btn btn-primary">Agregar</button>
		<a href="{{ route('trabajador.index') }}" class="btn btn-danger">Cancelar</a>
	   </div>
</div>




</form>

<script type="text/javascript" src="{{ asset('/bower_components/jquery/dist/jquery.js') }}"></script>
<!--script type="text/javascript" src="{{ asset('/bower_components/popper.js/dist/popper.min.js') }}"></script-->

<script type="text/javascript" src="{{ asset('/bower_components/boostrap/dist/js/bootstrap.js') }}"></script>