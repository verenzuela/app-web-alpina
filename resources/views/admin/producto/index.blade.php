
<link rel="stylesheet" type="text/css" href="{{ asset('/bower_components/boostrap/dist/css/bootstrap.min.css') }}">


<div class="container table-bordered">
	<table class="table responsive-lg table-hover">
		<thead>
			<tr class="table-dark">
				<td>Nombre</td>
				<td>Descripcion</td>
				<td>Costo</td>
				<td>Ean</td>
			</tr>
		</thead>

		<tbody>

			@foreach ($productos as $producto)

			<tr>
				<td>{{ $producto->id }}</td>
					<td>{{ $producto->descripcion }}</td>
					<td>{{ $producto->costo }}</td>
					<td>{{ $producto->ean }}</td>
					<td>
						<button class="btn btn-dark">Editar</button>
						<button class="btn btn-danger">Eliminar</button>
					</td>
			</tr>


			@endforeach


		</tbody>
		

	</table><div>
	
    	<a href="{{ route('producto.new') }}" class="btn btn-primary">Agregar nuevo</a>

	</div>
</div>


<script type="text/javascript" src="{{ asset('/bower_components/jquery/dist/jquery.js') }}"></script><
<!--script type="text/javascript" src="{{ asset('/bower_components/popper.js/dist/popper.min.js') }}"></script-->

<script type="text/javascript" src="{{ asset('/bower_components/boostrap/dist/js/bootstrap.js') }}"></script>