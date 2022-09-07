<?php

namespace App\Http\Controllers\Bs;

use App\Http\Controllers\Controller;
use App\Models\Bs\Barrio;
use App\Models\Bs\Ciudad;
use Illuminate\Http\Request;

class BarrioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barrios = Barrio::all();
        
        return view('bs.barrios.index', compact('barrios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ciudades = Ciudad::all()->sortBy('id', SORT_NATURAL | SORT_FLAG_CASE)->pluck('descripcion', 'id');
        return view('bs.barrios.create', compact('ciudades'));
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
            'descripcion'   => 'required',
            'ciudad_id' => 'required',
            'estado' => 'required',
        ]);
        $barrio = Barrio::create($request->all());
        return redirect()->route('bs.barrios.index')->with('store','Barrio ha sido creado');
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
    public function edit(Barrio $barrio)
    {
        $ciudades = Ciudad::all()->sortBy('id', SORT_NATURAL | SORT_FLAG_CASE)->pluck('descripcion', 'id');
        return view('bs.barrios.edit', compact('barrio','ciudades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barrio $barrio)
    {
        $request->validate([
            'descripcion'   => "required|unique:barrios,descripcion,$barrio->id",
            'ciudad_id' => 'required',
            'estado' => 'required',
        ]);

        $barrio->update($request->all());

        return redirect()->route('bs.barrios.index')->with('update','El barrio ha sido actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barrio $barrio)
    {
        $barrio->delete();
        return redirect()->route('bs.barrios.index')->with('destroy', 'El Barrio se ha eliminado con Éxito');
    }
}
