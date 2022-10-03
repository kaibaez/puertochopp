<?php

namespace App\Http\Controllers\Rh;

use App\Http\Controllers\Controller;
use App\Models\Rh\Empleado;
use App\Models\Rh\Permiso;
use App\Models\Rh\TipoPermiso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PermisoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permisos = Permiso::all();
        //$empleados = Empleado::all();  
        //$tipo_permisos = TipoPermiso::all();  
        return view('rh.permisos.index', compact('permisos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $empleados = DB::table("empleados")->select("id", DB::raw("CONCAT(nombres, ' ', apellidos) as empleados"))->pluck("empleados", "id");
        $tipo_permisos = TipoPermiso::all()->sortBy('id', SORT_NATURAL | SORT_FLAG_CASE)->pluck('descripcion', 'id');

        return view('rh.permisos.create', compact('empleados','tipo_permisos'));
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
            'empleado_id'   => 'required',
            'tip_permiso_id'   => 'required',
            'estado'   => 'required',
        ]);

    
        $permiso = Permiso::create($request->all());
        return redirect()->route('rh.permisos.index')->with('store','El Permiso ha sido otorgado al Empleado');
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
