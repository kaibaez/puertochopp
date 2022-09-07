<?php

namespace App\Http\Controllers\Rh;

use App\Http\Controllers\Controller;
use App\Models\Rh\Seccion;
use Illuminate\Http\Request;

class SeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $secciones = Seccion::all();
        return view('rh.secciones.index', compact('secciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rh.secciones.create');
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
        $seccion = Seccion::create($request->all());
        return redirect()->route('rh.secciones.index')->with('store','Secci&oacute;n ha sido creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  Seccion $seccion
     * @return \Illuminate\Http\Response
     */
    public function show(Seccion $seccion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  Seccion $seccion
     * @return \Illuminate\Http\Response
     */
    public function edit(Seccion $seccion)
    {
        return view('rh.secciones.edit', compact('seccion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  Seccion $seccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seccion $seccion)
    {
        $request->validate([
            'descripcion'   => "required|unique:secciones,descripcion,$seccion->id",
            'estado' => 'required',
        ]);
        $seccion->update($request->all());
        return redirect()->route('rh.secciones.index')->with('update','La Sección ha sido actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Seccion $seccion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seccion $seccion)
    {
        $seccion->delete();
        return redirect()->route('rh.secciones.index')->with('destroy', 'La Sección se ha eliminado con Éxito');
    }
}
