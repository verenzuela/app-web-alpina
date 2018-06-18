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


			@foreach ($cargos as $cargo)

				<tr>
					<td>{{ $cargo->id }}</td>
					<td>{{ $cargo->nombre }}</td>
					<td>{{ $cargo->descripcion }}</td>
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
	
    <a href="{{ route('cargo.new') }}">Agregar nuevo</a>

</div>