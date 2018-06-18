<link rel="stylesheet" type="text/css" href="{{ asset('/bower_components/boostrap/dist/css/bootstrap.min.css') }}">


<H3>FORMULARIO DE PERSONAL Y EVENTOS</H3>


<form id="pais_add" method="POST" action="{{ route('pais.add') }}">
	{{ csrf_field() }}
  <div class="form-group">
   
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

	<button type="submit" class="btn btn-primary">Agregar</button>

   	<a href="{{ route('pais.index') }}" class="btn btn-danger">Cancelar</a>
</form>




