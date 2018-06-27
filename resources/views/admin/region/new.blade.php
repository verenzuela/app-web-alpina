<link rel="stylesheet" type="text/css" href="{{ asset('/bower_components/boostrap/dist/css/bootstrap.min.css') }}">


<H3>FORMULARIO DE REGIONES</H3>


<form id="region_add" method="POST" action="{{ route('region.add') }}">
	{{ csrf_field() }}
	<div class="form-group">
		<div>
			<label>Nombre:</label>
			<input type="" id="nombre" name="nombre" class="form-control">
		</div>
		<div class="form-group">
			<label>Descripcion:</label>
			<input type="" id="descripcion" name="descripcion" class="form-control">
		</div>
		<div class="form-group">
			<button type="submmit" class="btn btn-primary">Agregar</button>
			<a href="{{ route('region.index') }}" class="btn btn-danger">Cancelar</a>
		</div>
	</div>

</form>

<script type="text/javascript" src="{{ asset('/bower_components/jquery/dist/jquery.js') }}"></script>
<!--script type="text/javascript" src="{{ asset('/bower_components/popper.js/dist/popper.min.js') }}"></script-->

<script type="text/javascript" src="{{ asset('/bower_components/boostrap/dist/js/bootstrap.js') }}"></script>