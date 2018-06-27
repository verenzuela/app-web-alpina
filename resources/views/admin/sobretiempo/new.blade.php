
<link rel="stylesheet" type="text/css" href="{{ asset('/bower_components/boostrap/dist/css/bootstrap.min.css') }}">


<H3>FORMULARIO DE REMUNERACIONES</H3>


<form id="sobretiempo_add" method="POST" action="{{ route('sobretiempo.add') }}">
	{{ csrf_field() }}
	<div class="form-group">

<div>
			<label for="nombre">Fecha:</label>
			<input type="" id="fecha" name="fecha" aria-describedby="nombreayuda" placeholder="Indique">
			<small id="nombreAyuda" class="form-text text-muted">Introduzca día.</small>
		</div>

		<div>
			<label for="nombre">Hora de Entrada:</label>
			<input type="" id="hora_de_entrada" name="hora_de_entrada" aria-describedby="nombreayuda" placeholder="Indique">
			<small id="nombreAyuda" class="form-text text-muted">Introduzca la cantidad requerida.</small>
		</div>
  
		<div class="form-group">
			<label>Hora de Salida:</label>
			<input type="" id="hora_de_salida" name="hora_de_salida" placeholder="Salida">
		</div>
		<div class="form-group">
			<label>Tiempo:</label>
			<input type="" id="tiempo" name="tiempo">
		</div>
		
		<div class="form-group">
			<label>Cod Trabajador:</label>
			<input type="" id="cod_trabajador" name="cod_trabajador">
		</div>


			<button type="submit" class="btn btn-primary">Agregar</button>
			 	<a href="{{ route('sobretiempo.index') }}" class="btn btn-danger">Cancelar</a>

</form>

<script type="text/javascript" src="{{ asset('/bower_components/jquery/dist/jquery.js') }}"></script>
<!--script type="text/javascript" src="{{ asset('/bower_components/popper.js/dist/popper.min.js') }}"></script-->

<script type="text/javascript" src="{{ asset('/bower_components/boostrap/dist/js/bootstrap.js') }}"></script>

