<link rel="stylesheet" type="text/css" href="{{ asset('/bower_components/boostrap/dist/css/bootstrap.min.css') }}">


<div class="container table-bordered">
	<table class="table responsive-lg table-hover">
		<thead>
			<tr class="table-dark">
				<td>Nombre</td>
				<td>Dirección</td>
				<td>Id Formato</td>
				<td>Cod Tienda</td>
				<td>Acción</td>
			</tr>
		</thead>

		<tbody>

			@foreach ($tiendas as $tienda)

			<tr>
					<td>{{ $tienda->nombre }}</td>
					<td>{{ $tienda->direccion }}</td>
					<td>{{ $tienda->id_formato }}</td>
					<td>{{ $tienda->cod_tienda}}</td>
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
	<a href="{{ route('tienda.new') }}" class="btn btn-primary">Agregar nuevo</a>
</div>
</div>

<script type="text/javascript" src="{{ asset('/bower_components/jquery/dist/jquery.js') }}"></script><
<!--script type="text/javascript" src="{{ asset('/bower_components/popper.js/dist/popper.min.js') }}"></script-->

<script type="text/javascript" src="{{ asset('/bower_components/boostrap/dist/js/bootstrap.js') }}"></script>

