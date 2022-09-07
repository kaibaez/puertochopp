<?php

namespace App\Http\Controllers\Rh;

use App\Http\Controllers\Controller;
use App\Models\Rh\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cargos = Cargo::all();
        return view('rh.cargos.index', compact('cargos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rh.cargos.create');
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
            'estado' => 'required',
        ]);
        $cargo = Cargo::create($request->all());
        return redirect()->route('rh.cargos.index')->with('store','Cargo ha sido creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  Cargo $cargo
     * @return \Illuminate\Http\Response
     */
    public function show(Cargo $cargo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  Cargo $cargo
     * @return \Illuminate\Http\Response
     */
    public function edit(Cargo $cargo)
    {
        return view('rh.cargos.edit', compact('cargo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  Cargo $cargo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cargo $cargo)
    {
        $request->validate([
            'descripcion'   => "required|unique:cargos,descripcion,$cargo->id",
            'estado' => 'required',
        ]);
        $cargo->update($request->all());
        return redirect()->route('rh.cargos.index')->with('update','El Cargo ha sido actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Cargo $cargo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cargo $cargo)
    {
        $cargo->delete();
        return redirect()->route('rh.cargos.index')->with('destroy', 'El Cargo se ha eliminado con Éxito');
    }
}
