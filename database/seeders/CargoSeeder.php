<?php

namespace Database\Seeders;

use App\Models\Rh\Cargo;
use Illuminate\Database\Seeder;

class CargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cargo::create([
            'id' => 0,
            'descripcion'=>'Sin Superior',
        ]);
        Cargo::create([
            'descripcion'=>'Mozo/a',
        ]);
        Cargo::create([
            'descripcion'=>'Cocinero/a',
        ]);
        Cargo::create([
            'descripcion'=>'Bartender',
        ]);
        Cargo::create([
            'descripcion'=>'Encargado/a de Limpieza',
        ]);
        Cargo::create([
            'descripcion'=>'Auxiliar Administrativo',
        ]);
        Cargo::create([
            'descripcion'=>'Encargado/a de Mantenimiento',
        ]);
        Cargo::create([
            'descripcion'=>'Cajero/a',
        ]);
        Cargo::create([
            'descripcion'=>'Encargado/a de Local',
        ]);
    }
}
/*

*/