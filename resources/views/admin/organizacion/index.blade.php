  <link rel="stylesheet" type="text/css" href="{{ asset('/bower_components/boostrap/dist/css/bootstrap.min.css') }}">


<div class="container table-bordered">
	<table class="table responsive-lg table-hover">
		<thead>
			<tr class="table-dark">
				<td>Organización</td>
				<td>Descripción</td>
				<td>Id Dependencia</td>
				<td>Acción</td>
			</tr>
		</thead>

		<tbody>

			@foreach ($organizaciones as $organizacion)

				<tr>
					<td>{{ $organizacion->organizacion }}</td>
					<td>{{ $organizacion->descripcion }}</td>
					<td>{{ $organizacion->id_dependencia }}</td>
					<td>
						<button class="btn btn-dark">Editar</button>
						<button class="btn btn-danger">Eliminar</button>
					</td>
				</tr>

			@endforeach


		</tbody>

	</table>

	<div>
	
    	<a href="{{ route('organizacion.new') }}" class="btn btn-primary">Agregar nuevo</a>

	</div>
</div>

<script type="text/javascript" src="{{ asset('/bower_components/jquery/dist/jquery.js') }}"></script><
<!--script type="text/javascript" src="{{ asset('/bower_components/popper.js/dist/popper.min.js') }}"></script-->

<script type="text/javascript" src="{{ asset('/bower_components/boostrap/dist/js/bootstrap.js') }}"></script>






















