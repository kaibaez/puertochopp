<?php

use App\Http\Controllers\Bs\BarrioController;
use App\Http\Controllers\Bs\CiudadController;
use App\Http\Controllers\Bs\PaisController;
use App\Http\Controllers\Bs\SucursalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Rh\CargoController;
use App\Http\Controllers\Rh\EmpleadoController;
use App\Http\Controllers\Rh\NotasController;
use App\Http\Controllers\Rh\SeccionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

## Recursos Humanos Rh ---------------------------------






Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::resource('home', HomeController::class)->names('home');
    /*Route::get('/home', function () {
        return view('home');
    })->name('home');*/

Route::resource('cargos', CargoController::class)->names('rh.cargos');
Route::resource('seccion', SeccionController::class)->names('rh.secciones');
Route::resource('empleados', EmpleadoController::class)->names('rh.empleados');
Route::resource('notas', NotasController::class)->names('rh.notas');



##Sistema Base Bs --------------------------------------
Route::resource('sucursal', SucursalController::class)->names('bs.sucursales');
Route::resource('pais', PaisController::class)->names('bs.paises');
Route::resource('ciudad', CiudadController::class)->names('bs.ciudades');
Route::resource('barrios', BarrioController::class)->names('bs.barrios');

});
