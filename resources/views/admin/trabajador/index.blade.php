<div>
	<table border="1">
		<thead>
			<tr>
				<td>Codigo del Trabajador</td>
				<td>Id Cargo</td>
				<td>Tiempo</td>
				<td>Horario</td>
				<td>Accion</td>
			</tr>
		</thead>

		<tbody>

			@foreach ($trabajadores as $trabajador)

			<tr>
				<td>{{ $trabajador->cod_trabajador }}</td>
					<td>{{ $trabajador->id_cargo }}</td>
					<td>{{ $trabajador->tiempo }}</td>
					<td>{{ $trabajador->horario }}</td>
					<td>
						<button>Editar</button>
						<button>Eliminar</button>
					</td>
			</tr>


			@endforeach


		</tbody>
		

	</table><div>
	
    	<a href="{{ route('trabajador.new') }}" class="btn btn-primary">Agregar nuevo</a>

	</div>
</div>