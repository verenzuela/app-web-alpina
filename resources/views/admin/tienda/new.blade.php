<link rel="stylesheet" type="text/css" href="{{ asset('/bower_components/boostrap/dist/css/bootstrap.min.css') }}">


<H3>FORMULARIO DE TIENDA</H3>


<form id="tienda_add" method="POST" action="{{ route('tienda.add') }}">
	
	{{ csrf_field() }}
	<div class="form-group">
		<div>
			<label>Nombre:</label>
			<input type="" id="nombre" name="nombre" class="form-control">
		</div>
		<div>
			<label>Dirección:</label>
			<input type="" id="direccion" name="direccion" class="form-control">
		</div>
		<div class="form-group">
			<label>Id Formato:</label>
			<input type="" id="id_formato" name="id_formato" class="form-control">
		</div>
		<div class="form-group">
			<label>Cod Tienda:</label>
			<input type="" id="cod_tienda" name="cod_tienda" class="form-control">
		</div>
		<div class="form-group">
			<button type="submmit" class="btn btn-primary">Agregar</button>
			<a href="{{ route('tienda.index') }}"  class="btn btn-danger">Cancelar</a>
		</div>
	</div>

</form>

<script type="text/javascript" src="{{ asset('/bower_components/jquery/dist/jquery.js') }}"></script>
<!--script type="text/javascript" src="{{ asset('/bower_components/popper.js/dist/popper.min.js') }}"></script-->

<script type="text/javascript" src="{{ asset('/bower_components/boostrap/dist/js/bootstrap.js') }}"></script>