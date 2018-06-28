<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\pais;
use Illuminate\Support\Facades\DB;

class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        //$paises = DB::table('pais');
        $paises = pais::get();

        return view('admin/pais/index', [ "paises" => $paises ] );



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/pais/new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        pais::create([
            'nombre' => $request['nombre'],
            'descripcion' => $request['descripcion']
        ]);

        return redirect()->intended('/pais/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $pais = pais::find($id);

      return view('admin/pais/actualizar', [ 'pais' => $pais ] );
      //return view('admin.pais.edit')->whit ('pais,$paises');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $pais = pais::find($request['id']);

        $pais->nombre = $request['nombre'];
        $pais->descripcion = $request['descripcion'];

        $pais->save();

        //return redirect()->intended('/pais/show', [ 'pais' => $pais ] );
        return view('admin/pais/show', [ 'pais' => $pais ] );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pais = pais::find($id);
        $pais->delete();
        return redirect()->intended('/pais/index');
    }
}
