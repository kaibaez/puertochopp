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
        Ciudad::create([
            'descripcion' =>'Fernando de la Mora',
            'pais_id' =>1, 
        ]);
        Ciudad::create([
            'descripcion' =>'San Lorenzo',
            'pais_id' =>1, 
        ]);
        Ciudad::create([
            'descripcion' =>'Ñemby',
            'pais_id' =>1, 
        ]);

        Ciudad::create([
            'descripcion' =>'Capiatá',
            'pais_id' =>1, 
        ]);
        Ciudad::create([
            'descripcion' =>'Aregua',
            'pais_id' =>1, 
        ]);


    }
}
