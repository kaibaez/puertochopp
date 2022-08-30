<?php

namespace App\Http\Controllers\Bs;

use App\Http\Controllers\Controller;
use App\Models\Bs\Pais;
use Illuminate\Http\Request;

class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $paises = Pais::all(); 
        return view('bs.paises.index', compact('paises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bs.paises.create');
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
            'descripcion'   => 'required|unique:paises',
            'estado' => 'required',
        ]);
        $cargo = Pais::create($request->all());

        return redirect()->route('bs.paises.index')->with('store','El pais ha sido creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  Pais $pais
     * @return \Illuminate\Http\Response
     */
    public function show(Pais $pais)
    {
        return view('bs.paises.show',compact('pais'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  Pais $pais
     * @return \Illuminate\Http\Response
     */
    public function edit(Pais $pai)
    {
        return view('bs.paises.edit',compact('pai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  Pais $pais
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pais $pai)
    {
        $request->validate([
            'descripcion'   => 'required|unique:paises',
            'estado' => 'required',
        ]);

        $pai->update($request->all());

        return redirect()->route('bs.paises.index')->with('update','El pais ha sido actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Pais $pais
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pais $pai)
    {
        $pai->delete();
        return redirect()->route('bs.paises.index')->with('destroy', 'El Pais se ha eliminado con Éxito');
    }
}
