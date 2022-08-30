<?php

namespace App\Http\Controllers\Bs;

use App\Http\Controllers\Controller;
use App\Models\Bs\Ciudad;
use App\Models\Bs\Pais;
use Illuminate\Http\Request;

class CiudadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ciudades = Ciudad::all();
        return view('bs.ciudades.index',compact('ciudades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $paises = Pais::all()->sortBy('id', SORT_NATURAL | SORT_FLAG_CASE)->pluck('descripcion', 'id');
        return view('bs.ciudades.create', compact('paises'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'descripcion'   => 'required|unique:ciudades',
            'pais_id' => 'required',
            'estado' => 'required',
        ]);
        $ciudad = Ciudad::create($request->all());

        return redirect()->route('bs.ciudades.index')->with('store','La ciudad ha sido creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  Ciudad $ciudad
     * @return \Illuminate\Http\Response
     */
    public function show(Ciudad $ciudad)
    {
        return view('bs.ciudades.show', compact('ciudad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ciudad $ciudad)
    {
        $paises = Pais::all()->sortBy('id', SORT_NATURAL | SORT_FLAG_CASE)->pluck('descripcion', 'id');
        return view('bs.ciudades.edit', compact('ciudad','paises'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ciudad $ciudad)
    {
        $request->validate([
            'descripcion'   => "required|unique:paises,descripcion,$ciudad->id",
            'pais_id' => 'required',
            'estado' => 'required',
        ]);

        $ciudad->update($request->all());

        return redirect()->route('bs.ciudades.index')->with('update','La ciudad ha sido actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ciudad $ciudad)
    {
        $ciudad->delete();
        return redirect()->route('bs.ciudades.index')->with('destroy', 'La Ciudad se ha eliminado con Éxito');
    }
}
