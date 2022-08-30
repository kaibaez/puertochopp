<?php

namespace Database\Seeders;

use App\Models\Bs\Sucursal;
use Illuminate\Database\Seeder;

class SucursalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sucursal::create([
            'descripcion' => 'Casa Central',
        ]);
    }
}
