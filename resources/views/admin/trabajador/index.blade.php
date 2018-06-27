
<link rel="stylesheet" type="text/css" href="{{ asset('/bower_components/boostrap/dist/css/bootstrap.min.css') }}">


<div class="container table-bordered">
	<table class="table responsive-lg table-hover">
		<thead>
			<tr class="table-dark">
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
						<button class="btn btn-dark">Editar</button>
						<button class="btn btn-danger">Eliminar</button>
					</td>
			</tr>


			@endforeach


		</tbody>
		

	</table><div>
	
    	<a href="{{ route('trabajador.new') }}" class="btn btn-primary">Agregar nuevo</a>

	</div>
</div>

<script type="text/javascript" src="{{ asset('/bower_components/jquery/dist/jquery.js') }}"></script><
<!--script type="text/javascript" src="{{ asset('/bower_components/popper.js/dist/popper.min.js') }}"></script-->

<script type="text/javascript" src="{{ asset('/bower_components/boostrap/dist/js/bootstrap.js') }}"></script>

