
<form id="trabajadores_add" method="POST" action="{{ route('trabajador.add') }}">
	{{ csrf_field() }}
	<div>
		  <div>
		<label>Codigo del Trabajador:</label>
		<input type="" id="cod_trabajador" name="cod_trabajador">
	</div>
	<div>
		<label>Id Cargo:</label>
		<input type="" id="id_cargo" name="id_cargo">
	</div>
	<div>
		<label>Tiempo:</label>
		<input type="" id="tiempo" name="tiempo">
	</div>
	<div>
		<label>Horario:</label>
		<input type="" id="horario" name="horario">
	</div>
	<div>
		<button type="submmit"t>Agregar</button>
			<a href="{{ route('trabajador.index') }}">Cancelar</a>
	   </div>
</div>