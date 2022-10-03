<?php

namespace App\Http\Controllers\Rh;

use App\Http\Controllers\Controller;
use App\Models\Rh\TipoPermiso;
use Illuminate\Http\Request;

class TipoPermisoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo_permisos = TipoPermiso::all();
        return view('rh.tipo_permisos.index', compact('tipo_permisos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rh.tipo_permisos.create');
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
        ]);
        $tipo_permiso = TipoPermiso::create($request->all());
        return redirect()->route('rh.tipo_permisos.index')->with('store','Tipo de Permiso ha sido creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  TipoPermiso $tipo_permiso
     * @return \Illuminate\Http\Response
     */
    public function show(TipoPermiso $tipo_permiso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  TipoPermiso $tipo_permiso
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoPermiso $tipo_permiso)
    {
        return view('rh.tipo_permisos.edit', compact('tipo_permiso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  TipoPermiso $tipo_permiso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoPermiso $tipo_permiso)
    {
        $request->validate([
            'descripcion'   => "required|unique:tipo_permisos,descripcion,$tipo_permiso->id",
        ]);
        $tipo_permiso->update($request->all());
        return redirect()->route('rh.tipo_permisos.index')->with('update','Tipo de Permiso ha sido actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  TipoPermiso $tipo_permiso
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoPermiso $tipo_permiso)
    {
        $tipo_permiso->delete();
        return redirect()->route('rh.tipo_permisos.index')->with('destroy', 'Tipo de Permiso se ha eliminado con Éxito');
    }
}
