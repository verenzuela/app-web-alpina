<link rel="stylesheet" type="text/css" href="{{ asset('/bower_components/boostrap/dist/css/bootstrap.min.css') }}">


<H3>FORMULARIO DE ORGANIZACIONES</H3>


<form id="organizacion_add" method="POST" action="{{ route('organizacion.add') }}">
	{{ csrf_field() }}

	<div class="form-group">
		<div>
			<label for="nombre">Organizacion:</label>
			<input type="" id="organizacion" name="organizacion" aria-describedby="nombreayuda" placeholder="Indique la Organizacion" class="form-control">
			<small id="nombreAyuda" class="form-text text-muted">Introduzca la organizacion requerida.</small>
		</div>
		<div class="form-group">
			<label for="descripcion">Descripcion:</label>
			<input type="" id="descripcion" class="form-control" name="descripcion" placeholder="Descripcion">
		</div>
		<div class="form-group">
			<label>Id Dependencia:</label>
			<input type="" id="id_dependencia" name="id_dependencia" class="form-control"placeholder="Dependencia">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Agregar</button>
			 	<a href="{{ route('organizacion.index') }}" class="btn btn-danger">Cancelar</a>
		</div>	
</form>

<script type="text/javascript" src="{{ asset('/bower_components/jquery/dist/jquery.js') }}"></script>
<!--script type="text/javascript" src="{{ asset('/bower_components/popper.js/dist/popper.min.js') }}"></script-->

<script type="text/javascript" src="{{ asset('/bower_components/boostrap/dist/js/bootstrap.js') }}"></script>

