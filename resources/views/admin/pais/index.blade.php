
<link rel="stylesheet" type="text/css" href="{{ asset('/bower_components/boostrap/dist/css/bootstrap.min.css') }}">


<div class="container table-bordered">
	<table class="table responsive-lg table-hover">
		<thead>
			<tr class="table-dark">
				<td>Id</td>
				<td>Nombre</td>
				<td>Descripción</td>
				<td>Acción</td>
			</tr>
		</thead>

		<tbody>

			@foreach ($paises as $pais)

				<tr>
					<td>{{ $pais->id }}</td>
					<td>{{ $pais->nombre }}</td>
					<td>{{ $pais->descripcion }}</td>
					<td>
						<button class="btn btn-dark">Editar</button>
						<button class="btn btn-danger">Eliminar</button>
					</td>
				</tr>

			@endforeach


		</tbody>

	</table>

	<div>
	
    	<a href="{{ route('pais.new') }}" class="btn btn-primary">Agregar nuevo</a>

	</div>
</div>

