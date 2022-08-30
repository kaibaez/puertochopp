<?php

namespace Database\Seeders;

use App\Models\Bs\Ciudad;
use Illuminate\Database\Seeder;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ciudad::create([
            'descripcion' =>'Asunción',
            'pais_id' =>1, 
        ]);
    }
}
