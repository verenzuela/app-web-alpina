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

			@foreach ($ciudades as $ciudad)

			<tr>
				<td>{{ $ciudad->id }}</td>
					<td>{{ $ciudad->nombre }}</td>
					<td>{{ $ciudad->descripcion }}</td>
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
	
	<a href="{{ route('ciudad.new') }}">Agregar nuevo</a>
</div>
