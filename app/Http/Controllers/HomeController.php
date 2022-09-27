<?php

namespace App\Http\Controllers;

use App\Models\Rh\Empleado;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $cantEmpleado = Empleado::where('estado','A')->groupBy('id')->count();
        return view('home', compact('cantEmpleado'));
    }
}
