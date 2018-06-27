<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('/pais')->group(function(){

	Route::get('/index', 'Admin\PaisController@index')->name('pais.index');

	Route::get('/new', 'Admin\PaisController@create')->name('pais.new');
	Route::post('/new', 'Admin\PaisController@store')->name('pais.add');
	Route::get('/pais', 'Admin\PaisController@edit')->name('pais.edit');
   
});

Route::prefix('/cargo')->group(function(){

	Route::get('/index', 'Admin\CargoController@index')->name('cargo.index');

	Route::get('/new', 'Admin\CargoController@create')->name('cargo.new');
	Route::post('/new', 'Admin\CargoController@store')->name('cargo.add');

//Route::prefix('/cargo')->group(function(){

	//Route::get('/edit', function(){ return view('admin.cargo.edit'); });

	//Route::get('/new', function(){ return view('admin.cargo.new'); });

	//Route::get('/show', function(){ return view('admin.cargo.show'); });

	//Route::get('/index', function(){ return view('admin.cargo.index'); });

});

Route::prefix('/ciudad')->group(function(){

	Route::get('/index', 'Admin\CiudadController@index')->name('ciudad.index');

	Route::get('/new', 'Admin\CiudadController@create')->name('ciudad.new');
	Route::post('/new', 'Admin\CiudadController@store')->name('ciudad.add');

//**Route::prefix('/ciudad')->group(function(){

	//Route::get('/edit', function(){ return view('admin.ciudad.edit'); });

	//Route::get('/new', function(){ return view('admin.ciudad.new'); });

	//Route::get('/show', function(){ return view('admin.ciudad.show'); });

	//Route::get('/index', function(){ return view('admin.ciudad.index'); });

});
Route::prefix('/equipo')->group(function(){

	Route::get('/index', 'Admin\EquipoController@index')->name('equipo.index');

	Route::get('/new', 'Admin\EquipoController@create')->name('equipo.new');
	Route::post('/new', 'Admin\EquipoController@store')->name('equipo.add');

//Route::prefix('/equipos')->group(function(){

//	Route::get('/edit', function(){ return view('admin.equipos.edit'); });

//	Route::get('/new', function(){ return view('admin.equipos.new'); });

//	Route::get('/show', function(){ return view('admin.equipos.show'); });

//
//	Route::get('/index', function(){ return view('admin.equipos.index'); });

});

Route::prefix('/organizacion')->group(function(){

	Route::get('/index', 'Admin\OrganizacionController@index')->name('organizacion.index');

	Route::get('/new', 'Admin\OrganizacionController@create')->name('organizacion.new');
	Route::post('/new', 'Admin\OrganizacionController@store')->name('organizacion.add');

//Route::prefix('/organizacion')->group(function(){

//	Route::get('/edit', function(){ return view('admin.organizacion.edit'); });

//	Route::get('/new', function(){ return view('admin.organizacion.new'); });

//	Route::get('/show', function(){ return view('admin.organizacion.show'); });

//	Route::get('/index', function(){ return view('admin.organizacion.index'); });

});


Route::prefix('/pedido')->group(function(){

	Route::get('/index', 'Admin\PedidoController@index')->name('pedido.index');

	Route::get('/new', 'Admin\PedidoController@create')->name('pedido.new');
	Route::post('/new', 'Admin\PedidoController@store')->name('pedido.add');
//Route::prefix('/pedidos')->group(function(){

//	Route::get('/edit', function(){ return view('admin.pedidos.edit'); });

//	Route::get('/new', function(){ return view('admin.pedidos.new'); });

//	Route::get('/show', function(){ return view('admin.pedidos.show'); });

//	Route::get('/index', function(){ return view('admin.pedidos.index'); });

});

Route::prefix('/producto')->group(function(){

Route::get('/index', 'Admin\ProductoController@index')->name('producto.index');

Route::get('/new', 'Admin\ProductoController@create')->name('producto.new');
Route::post('/new', 'Admin\ProductoController@store')->name('producto.add');


//Route::prefix('/producto')->group(function(){

//	Route::get('/edit', function(){ return view('admin.producto.edit'); });

	//Route::get('/new', function(){ return view('admin.producto.new'); });

//	Route::get('/show', function(){ return view('admin.producto.show'); });

//	Route::get('/index', function(){ return view('admin.producto.index'); });

});

Route::prefix('/region')->group(function(){

	Route::get('/index', 'Admin\RegionController@index')->name('region.index');

	Route::get('/new', 'Admin\RegionController@create')->name('region.new');
	Route::post('/new', 'Admin\RegionController@store')->name('region.add');


//**Route::prefix('/region')->group(function(){

//	Route::get('/edit', function(){ return view('admin.region.edit'); });

//	Route::get('/new', function(){ return view('admin.region.new'); });

//	Route::get('/show', function(){ return view('admin.region.show'); });

//	Route::get('/index', function(){ return view('admin.region.index'); });

});

Route::prefix('/sobretiempo')->group(function(){

	Route::get('/index', 'Admin\SobretiempoController@index')->name('sobretiempo.index');

	Route::get('/new', 'Admin\SobretiempoController@create')->name('sobretiempo.new');
	Route::post('/new', 'Admin\SobretiempoController@store')->name('sobretiempo.add');
//Route::prefix('/sobretiempo')->group(function(){

//	Route::get('/edit', function(){ return view('admin.sobretiempo.edit'); });

///	Route::get('/new', function(){ return view('admin.sobretiempo.new'); });

	//Route::get('/show', function(){ return view('admin.sobretiempo.show'); });

	//Route::get('/index', function(){ return view('admin.sobretiempo.index'); });

});

Route::prefix('/tienda')->group(function(){

	Route::get('/index', 'Admin\TiendaController@index')->name('region.index');

	Route::get('/new', 'Admin\TiendaController@create')->name('tienda.new');
	Route::post('/new', 'Admin\TiendaController@store')->name('tienda.add');
//**Route::prefix('/tienda')->group(function(){

//	Route::get('/edit', function(){ return view('admin.tienda.edit'); });

//	Route::get('/new', function(){ return view('admin.tienda.new'); });

//	Route::get('/show', function(){ return view('admin.tienda.show'); });

//	Route::get('/index', function(){ return view('admin.tienda.index'); });
//
});


Route::prefix('/trabajador')->group(function(){

	Route::get('/index', 'Admin\TrabajadoresController@index')->name('trabajador.index');

	Route::get('/new', 'Admin\TrabajadoresController@create')->name('trabajador.new');
	Route::post('/new', 'Admin\TrabajadoresController@store')->name('trabajador.add');



//Route::prefix('/trabajadores')->group(function(){

//	Route::get('/index', 'Admin\TrabajadoresController@index')->name('trabajadores.index');

//	Route::get('/new', 'Admin\TrabajadoresController@create')->name('trabajadores.new');
//	Route::post('/new', 'Admin\trabajadoresController@store')->name('trabajadores.add');
//Route::prefix('/trabajadores')->group(function(){

	//Route::get('/edit', function(){ return view('admin.trabajadores.edit'); });

//	Route::get('/new', function(){ return view('admin.trabajadores.new'); });

//	Route::get('/show', function(){ return view('admin.trabajadores.show'); });

//	Route::get('/index', function(){ return view('admin.trabajadores.index'); });

});


Route::prefix('/tienda')->group(function(){

	Route::get('/index', 'Admin\TiendaController@index')->name('tienda.index');

	Route::get('/new', 'Admin\TiendaController@create')->name('tienda.new');
	Route::post('/new', 'Admin\TiendaController@store')->name('tienda.add');




});









