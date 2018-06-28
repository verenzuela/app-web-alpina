
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
						<a href="{{ route('pais.edit', [ 'id' => $pais->id ]   ) }}" class="btn btn-primary">editar</a>

						<a href="{{ route('pais.delete', [ 'id' => $pais->id ]   ) }}" class="btn btn-danger">eliminar</a>
						<!--button class="btn btn-dark btn-xs">Editar</button-->
						<!--button class="btn btn-danger btn-xs ">Eliminar</button-->
					</td>
				</tr>

			@endforeach


		</tbody>

	</table>

	<div>
	
    	<a href="{{ route('pais.new') }}" class="btn btn-primary">Agregar nuevo</a>

	</div>
</div>

<script type="text/javascript" src="{{ asset('/bower_components/jquery/dist/jquery.js') }}"></script><
<!--script type="text/javascript" src="{{ asset('/bower_components/popper.js/dist/popper.min.js') }}"></script-->

<script type="text/javascript" src="{{ asset('/bower_components/boostrap/dist/js/bootstrap.js') }}"></script>


