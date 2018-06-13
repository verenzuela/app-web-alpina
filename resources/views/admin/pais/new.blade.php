
<form id="pais_add" method="POST" action="{{ route('pais.add') }}">
	{{ csrf_field() }}
	<div>
		<div>
			<label>Nombre:</label>
			<input type="" id="nombre" name="nombre">
		</div>
		<div>
			<label>Descripcion:</label>
			<input type="" id="descripcion" name="descripcion">
		</div>
		<div>
			<button type="submmit"t>Agregar</button>
			<a href="{{ route('pais.index') }}">Cancelar</a>
		</div>
	</div>

</form>