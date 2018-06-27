
<link rel="stylesheet" type="text/css" href="{{ asset('/bower_components/boostrap/dist/css/bootstrap.min.css') }}">


<div class="container table-bordered">
	<table class="table responsive-lg table-hover">
		<thead>
			<tr class="table-dark">
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
						<button class="btn btn-dark">Editar</button>
						<button class="btn btn-danger">Eliminar</button>
					</td>
				</tr>

			@endforeach


		</tbody>

	</table>
</div>
<div>
	
    <a href="{{ route('cargo.new') }}" class="btn btn-primary">Agregar nuevo</a>

</div>

<script type="text/javascript" src="{{ asset('/bower_components/jquery/dist/jquery.js') }}"></script>
<!--script type="text/javascript" src="{{ asset('/bower_components/popper.js/dist/popper.min.js') }}"></script-->

<script type="text/javascript" src="{{ asset('/bower_components/boostrap/dist/js/bootstrap.js') }}"></script>