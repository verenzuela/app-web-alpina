



<link rel="stylesheet" type="text/css" href="{{ asset('/bower_components/boostrap/dist/css/bootstrap.min.css') }}">

<H3>FORMULARIO DE PEDIDOS</H3>

<form id="pedidos_add" method="POST" action="{{ route('pedido.add') }}">
	{{ csrf_field() }}
	<div>
		  <div class="form-group">
		<label>Id Producto:</label>
		<input type="" id="id_producto" name="id_producto" class="form-control">
	</div>
	<div class="form-group">
		<label>Cod trabajador:</label>
		<input type="" id="cod_trabajador" name="cod_trabajador" class="form-control">
	</div>
	<div class="form-group">
		<label>Tienda:</label>
		<input type="" id="tienda" name="tienda" class="form-control">
	</div>
	<div class="form-group">
		<label>Cantidad:</label>
		<input type="" id="cantidad" name="cantidad" class="form-control">
	</div>
	<div class="form-group">
		<button type="submmit" class="btn btn-primary">Agregar</button>
			<a href="{{ route('trabajador.index') }}" class="btn btn-danger">Cancelar</a>
	   </div>
</div>

</form>


<script type="text/javascript" src="{{ asset('/bower_components/jquery/dist/jquery.js') }}"></script>
<!--script type="text/javascript" src="{{ asset('/bower_components/popper.js/dist/popper.min.js') }}"></script-->

<script type="text/javascript" src="{{ asset('/bower_components/boostrap/dist/js/bootstrap.js') }}"></script>







