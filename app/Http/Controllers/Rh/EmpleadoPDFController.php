<?php

namespace App\Http\Controllers\Rh;

use App\Http\Controllers\Controller;
use App\Models\Rh\Empleado;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class EmpleadoPDFController extends Controller
{
    public function PDFEmpleado($id){
        $empleado = Empleado::where('id',$id)->first();
        $pdf = Pdf::loadView('rh.empleados.pdf',compact('empleado'))->setPaper('a4', 'portrait');
        return $pdf->download('empleado_'.$id.'.pdf');
    }
}
