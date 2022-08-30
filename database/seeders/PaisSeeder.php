<?php

namespace Database\Seeders;

use App\Models\Bs\Pais;
use Illuminate\Database\Seeder;

class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pais::create([
            'descripcion'=>'Paraguay',
            'abreviatura'=>'PY',
        ]);
        Pais::create([
            'descripcion'=>'Argentina',
            'abreviatura'=>'PY',
        ]);
        Pais::create([
            'descripcion'=>'Brasil',
            'abreviatura'=>'BR',
        ]);
    }
}
