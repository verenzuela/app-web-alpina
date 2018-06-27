<link rel="stylesheet" type="text/css" href="{{ asset('/bower_components/boostrap/dist/css/bootstrap.min.css') }}">


                <H3>FORMULARIO DE EQUIPO</H3>

<form id="equipo_add" method="POST" action="{{ route('equipo.add') }}">
	{{ csrf_field() }}
	<div>
		<div>
			<label>Nombre:</label>
			<input type="" id="formato" name="formato" class="form-control">
		</div>
		<div>
			<label>Formato:</label>
			<input type="" id="descripcion" name="descripcion" class="form-control">
		</div>
		<div>
			<button type="submmit" class="btn btn-primary">Agregar</button>
			<a href="{{ route('equipo.index') }}" class="btn btn-danger">Cancelar</a>
		</div>
	</div>

</form>

<script type="text/javascript" src="{{ asset('/bower_components/jquery/dist/jquery.js') }}"></script>
<!--script type="text/javascript" src="{{ asset('/bower_components/popper.js/dist/popper.min.js') }}"></script-->

<script type="text/javascript" src="{{ asset('/bower_components/boostrap/dist/js/bootstrap.js') }}"></script>




