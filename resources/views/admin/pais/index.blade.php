
<div>
	<table border="1">
		<thead>
			<tr>
				<td>Id</td>
				<td>Nombre</td>
				<td>Descripcion</td>
				<td>Accion</td>
			</tr>
		</thead>

		<tbody>

			@foreach ($paises as $pais)

				<tr>
					<td>{{ $pais->id }}</td>
					<td>{{ $pais->nombre }}</td>
					<td>{{ $pais->descripcion }}</td>
					<td>
						<button>Editar</button>
						<button>Eliminar</button>
					</td>
				</tr>

			@endforeach


		</tbody>

	</table>
</div>
<div>
	
    <a href="{{ route('pais.new') }}">Agregar nuevo</a>

</div>
