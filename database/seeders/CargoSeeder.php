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
    }
}
