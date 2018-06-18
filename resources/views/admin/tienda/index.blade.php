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

			@foreach ($tiendas as $tienda)

			<tr>
				<td>{{ $tienda->id }}</td>
					<td>{{ $tienda->nombre }}</td>
					<td>{{ $tienda->descripcion }}</td>
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
	<a href="{{ route('tienda.new') }}">Agregar nuevo</a>
</div>
