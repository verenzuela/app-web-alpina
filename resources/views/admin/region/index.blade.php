
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

			@foreach ($regiones as $region)

			<tr>
				<td>{{ $region->id }}</td>
					<td>{{ $region->nombre }}</td>
					<td>{{ $region->descripcion }}</td>
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
	<a href="{{ route('region.new') }}">Agregar nuevo</a>
</div>
