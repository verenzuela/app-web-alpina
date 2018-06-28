<div>

	<div>Información actualizada correctamente...</div>

	<div>
		<label>Nombre:</label>
		<div>{{ $pais->nombre }}</div>
	</div>
	<div>
		<label>Descripcion:</label>
		<div>{{ $pais->descripcion }}</div>
	</div>
	<div>
		<a href="{{ route('pais.edit', [ 'id' => $pais->id ]   ) }}" >editar</a>
		<button>Cancelar</button>
	</div>
</div>