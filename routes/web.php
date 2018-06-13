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

});

Route::prefix('/cargo')->group(function(){

	Route::get('/edit', function(){ return view('admin.cargo.edit'); });

	Route::get('/new', function(){ return view('admin.cargo.new'); });

	Route::get('/show', function(){ return view('admin.cargo.show'); });

	Route::get('/index', function(){ return view('admin.cargo.index'); });

});



Route::prefix('/ciudad')->group(function(){

	Route::get('/edit', function(){ return view('admin.ciudad.edit'); });

	Route::get('/new', function(){ return view('admin.ciudad.new'); });

	Route::get('/show', function(){ return view('admin.ciudad.show'); });

	Route::get('/index', function(){ return view('admin.ciudad.index'); });

});



Route::prefix('/equipos')->group(function(){

	Route::get('/edit', function(){ return view('admin.equipos.edit'); });

	Route::get('/new', function(){ return view('admin.equipos.new'); });

	Route::get('/show', function(){ return view('admin.equipos.show'); });

	Route::get('/index', function(){ return view('admin.equipos.index'); });

});



Route::prefix('/organizacion')->group(function(){

	Route::get('/edit', function(){ return view('admin.organizacion.edit'); });

	Route::get('/new', function(){ return view('admin.organizacion.new'); });

	Route::get('/show', function(){ return view('admin.organizacion.show'); });

	Route::get('/index', function(){ return view('admin.organizacion.index'); });

});



Route::prefix('/pedidos')->group(function(){

	Route::get('/edit', function(){ return view('admin.pedidos.edit'); });

	Route::get('/new', function(){ return view('admin.pedidos.new'); });

	Route::get('/show', function(){ return view('admin.pedidos.show'); });

	Route::get('/index', function(){ return view('admin.pedidos.index'); });

});



Route::prefix('/producto')->group(function(){

	Route::get('/edit', function(){ return view('admin.producto.edit'); });

	Route::get('/new', function(){ return view('admin.producto.new'); });

	Route::get('/show', function(){ return view('admin.producto.show'); });

	Route::get('/index', function(){ return view('admin.producto.index'); });

});


Route::prefix('/region')->group(function(){

	Route::get('/edit', function(){ return view('admin.region.edit'); });

	Route::get('/new', function(){ return view('admin.region.new'); });

	Route::get('/show', function(){ return view('admin.region.show'); });

	Route::get('/index', function(){ return view('admin.region.index'); });

});


Route::prefix('/sobretiempo')->group(function(){

	Route::get('/edit', function(){ return view('admin.sobretiempo.edit'); });

	Route::get('/new', function(){ return view('admin.sobretiempo.new'); });

	Route::get('/show', function(){ return view('admin.sobretiempo.show'); });

	Route::get('/index', function(){ return view('admin.sobretiempo.index'); });

});


Route::prefix('/tienda')->group(function(){

	Route::get('/edit', function(){ return view('admin.tienda.edit'); });

	Route::get('/new', function(){ return view('admin.tienda.new'); });

	Route::get('/show', function(){ return view('admin.tienda.show'); });

	Route::get('/index', function(){ return view('admin.tienda.index'); });

});


Route::prefix('/trabajadores')->group(function(){

	Route::get('/edit', function(){ return view('admin.trabajadores.edit'); });

	Route::get('/new', function(){ return view('admin.trabajadores.new'); });

	Route::get('/show', function(){ return view('admin.trabajadores.show'); });

	Route::get('/index', function(){ return view('admin.trabajadores.index'); });

});









