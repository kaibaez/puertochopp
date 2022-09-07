<?php

namespace App\Http\Controllers\Rh;

use App\Http\Controllers\Controller;
use App\Models\Bs\Barrio;
use App\Models\Bs\Ciudad;
use App\Models\Bs\Pais;
use App\Models\Bs\Sucursal;
use App\Models\Rh\Cargo;
use App\Models\Rh\Empleado;
use App\Models\Rh\Seccion;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::all();  
        return view('rh.empleados.index', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ciudades = Ciudad::all()->sortBy('id', SORT_NATURAL | SORT_FLAG_CASE)->pluck('descripcion', 'id');
        $paises = Pais::all()->sortBy('id', SORT_NATURAL | SORT_FLAG_CASE)->pluck('descripcion', 'id');
        $barrios = Barrio::all()->sortBy('id', SORT_NATURAL | SORT_FLAG_CASE)->pluck('descripcion', 'id');
        $cargos = Cargo::all()->sortBy('id', SORT_NATURAL | SORT_FLAG_CASE)->pluck('descripcion', 'id');
        $secciones = Seccion::all()->sortBy('id', SORT_NATURAL | SORT_FLAG_CASE)->pluck('descripcion', 'id');
        $sucursales = Sucursal::all()->sortBy('id', SORT_NATURAL | SORT_FLAG_CASE)->pluck('descripcion', 'id');
        

        return view('rh.empleados.create', compact('ciudades','paises','barrios','cargos','secciones','sucursales'));

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
            'nombres'   => 'required',
            'apellidos'   => 'required',
            'documento'   => 'required|unique:empleados',
            'direcciones'   => 'required',
            'pais_id' => 'required',    
            'ciudad_id' => 'required',    
            'barrio_id' => 'required',  
            'fec_nacimiento' => 'required',
            'salario' => 'required',
            'salario_ips' => 'required',
            'anticipo' => 'required',
            'estado' => 'required',
        ]);
        $empleado = Empleado::create($request->all());
        return redirect()->route('rh.empleados.index')->with('store','Empleamdo ha sido creado');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
