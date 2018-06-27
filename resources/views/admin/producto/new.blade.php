
<link rel="stylesheet" type="text/css" href="{{ asset('/bower_components/boostrap/dist/css/bootstrap.min.css') }}">


<H3>FORMULARIO DE PRODUCTO</H3>

<form id="producto_add" method="POST" action="{{ route('producto.add') }}">
	{{ csrf_field() }}
	<div class="form-group">
		  <div>
		<label>Nombre:</label>
		<input type="" id="nombre" name="nombre" class="form-control">
	</div>
	<div class="form-group">
		<label>descripcion:</label>
		<input type="" id="descripcion" name="descripcion" class="form-control">
	</div>
	<div class="form-group">
		<label>Costo:</label>
		<input type="" id="costo" name="costo" class="form-control">
	</div>
	<div class="form-group">
		<label>Ean:</label>
		<input type="" id="ean" name="ean" class="form-control">
	</div>
	
		<button type="submmit" class="btn btn-primary">Agregar</button>
			<a href="{{ route('producto.index') }}" class="btn btn-danger">Cancelar</a>

</form>

<script type="text/javascript" src="{{ asset('/bower_components/jquery/dist/jquery.js') }}"></script>
<!--script type="text/javascript" src="{{ asset('/bower_components/popper.js/dist/popper.min.js') }}"></script-->

<script type="text/javascript" src="{{ asset('/bower_components/boostrap/dist/js/bootstrap.js') }}"></script>


