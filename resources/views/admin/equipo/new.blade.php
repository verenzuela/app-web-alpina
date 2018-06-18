
<form id="equipo_add" method="POST" action="{{ route('equipo.add') }}">
	{{ csrf_field() }}
	<div>
		<div>
			<label>Nombre:</label>
			<input type="" id="formato" name="formato">
		</div>
		<div>
			<label>Formato:</label>
			<input type="" id="descripcion" name="descripcion">
		</div>
		<div>
			<button type="submmit"t>Agregar</button>
			<a href="{{ route('equipo.index') }}">Cancelar</a>
		</div>
	</div>

</form>