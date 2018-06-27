<link rel="stylesheet" type="text/css" href="{{ asset('/bower_components/boostrap/dist/css/bootstrap.min.css') }}">


<div class="container table-bordered">
	<table class="table responsive-lg table-hover">
		<thead>
			<tr class="table-dark">
				<td>Fecha</td>
				<td>Hora de Entrada</td>
				<td>Hora de Salida</td>
				<td>Tiempo</td>
				<td>Cod Trabajador</td>   
				<td>Acción</td>
			</tr>
		</thead>

		<tbody>

			@foreach ($sobretiempos as $sobretiempo)

				<tr>
					<td>{{ $sobretiempo->fecha }}</td>
					<td>{{ $sobretiempo->hora_de_entrada }}</td>
					<td>{{ $sobretiempo->hora_de_salida }}</td>
					<td>{{ $sobretiempo->tiempo }}</td>
					<td>{{ $sobretiempo->cod_trabajador }}</td>

					<td>
						<button class="btn btn-dark">Editar</button>
						<button class="btn btn-danger">Eliminar</button>
					</td>
				</tr>

			@endforeach


		</tbody>

	</table>

	<div>
	
    	<a href="{{ route('sobretiempo.new') }}" class="btn btn-primary">Agregar nuevo</a>

	</div>
</div>

<script type="text/javascript" src="{{ asset('/bower_components/jquery/dist/jquery.js') }}"></script><
<!--script type="text/javascript" src="{{ asset('/bower_components/popper.js/dist/popper.min.js') }}"></script-->

<script type="text/javascript" src="{{ asset('/bower_components/boostrap/dist/js/bootstrap.js') }}"></script>