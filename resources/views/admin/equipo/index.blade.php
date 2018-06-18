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

			@foreach ($equipos as $equipo)

				<tr>
					<td>{{ $equipo->id }}</td>
					<td>{{ $equipo->nombre }}</td>
					<td>{{ $equipo->descripcion }}</td>
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
	
    <a href="{{ route('equipo.new') }}">Agregar nuevo</a>

</div>
