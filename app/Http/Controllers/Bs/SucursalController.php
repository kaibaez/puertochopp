<?php

namespace App\Http\Controllers\Bs;

use App\Http\Controllers\Controller;
use App\Models\Bs\Sucursal;
use Illuminate\Http\Request;

class SucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sucursales = Sucursal::all();
        
        return view('bs.sucursales.index', compact('sucursales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bs.sucursales.create');
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
        $sucursal = Sucursal::create($request->all());

        return redirect()->route('bs.sucursales.index')->with('store','Sucursal ha sido creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  Sucursal $sucursal
     * @return \Illuminate\Http\Response
     */
    public function show(Sucursal $sucursal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  Sucursal $sucursal
     * @return \Illuminate\Http\Response
     */
    public function edit(Sucursal $sucursal)
    {
        return view('bs.sucursales.edit', compact('sucursal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  Sucursal $sucursal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sucursal $sucursal)
    {
        $request->validate([
            'descripcion'   => "required",
            'estado' => 'required',
        ]);

        $sucursal->update($request->all());

        return redirect()->route('bs.sucursales.index')->with('update','El barrio ha sido actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Sucursal $sucursal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sucursal $sucursal)
    {
        $sucursal->delete();
        return redirect()->route('bs.sucursales.index')->with('destroy', 'La Sucursal se ha eliminado con Éxito');
    }
}
