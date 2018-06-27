
<link rel="stylesheet" type="text/css" href="{{ asset('/bower_components/boostrap/dist/css/bootstrap.min.css') }}">


<div class="container table-bordered">
	<table class="table responsive-lg table-hover">
		<thead>
			<tr class="table-dark">
				<td>Id producto</td>
				<td>Cod trabajador</td>
				<td>Tienda</td>
				<td>Cantidad</td>
				<td>Accion</td>
			</tr>
		</thead>

		<tbody>

			@foreach ($pedidos as $pedido)

			<tr>
				<td>{{ $pedido->id_producto }}</td>
					<td>{{ $pedido->cod_trabajador }}</td>
					<td>{{ $pedido->tienda }}</td>
					<td>{{ $pedido->cantidad }}</td>
					<td>
						<button class="btn btn-dark">Editar</button>
						<button class="btn btn-danger">Eliminar</button>
					</td>
			</tr>


			@endforeach


		</tbody>
		

	</table><div>
	
    	<a href="{{ route('pedido.new') }}" class="btn btn-primary">Agregar nuevo</a>

	</div>
</div>


<script type="text/javascript" src="{{ asset('/bower_components/jquery/dist/jquery.js') }}"></script><
<!--script type="text/javascript" src="{{ asset('/bower_components/popper.js/dist/popper.min.js') }}"></script-->

<script type="text/javascript" src="{{ asset('/bower_components/boostrap/dist/js/bootstrap.js') }}"></script>