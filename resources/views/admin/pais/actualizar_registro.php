<link rel="stylesheet" type="text/css" href="{{ asset('/bower_components/boostrap/dist/css/bootstrap.min.css') }}">


<H3>ACTUALIZAR REGISTRO </H3>


<form id="pais_add" method="POST" action="{{ route('pais.add') }}">
	{{ csrf_field() }}
  <div class="form-group">
   <div>
   <label for="nombre">Nombre y Apellido</label>
    <input type="nombres" class="form-control" id="nombre" name="nombre" aria-describedby="nombreayuda" placeholder="Introduzca su Nombre">
    <small id="nombreAyuda" class="form-text text-muted">Introduzca su primer Nombre y su primer Apellido.</small>
  </div>
  <div class="form-group">
    <label for="descripcion">Descripción</label>
    <input type="descripcion" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion">
  </div>
  <!-- div class="form-group">
  <label for=tiempo>Fecha</label> <input type="datetime" id="tiempo" class="form-control" placeholder="Introduzca día">
  </div -->

	<button type="submit" class="btn btn-primary">Actializar Paises</button>

   	<a href="{{ route('pais.index') }}" class="btn btn-danger">Cancelar</a>
</form>

<script type="text/javascript" src="{{ asset('/bower_components/jquery/dist/jquery.js') }}"></script>
<!--script type="text/javascript" src="{{ asset('/bower_components/popper.js/dist/popper.min.js') }}"></script-->

<script type="text/javascript" src="{{ asset('/bower_components/boostrap/dist/js/bootstrap.js') }}"></script>

