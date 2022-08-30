<?php

namespace Database\Seeders;

use App\Models\Bs\Barrio;
use Illuminate\Database\Seeder;

class BarrioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Barrio::create([
            'descripcion'=>'Centro',
            'ciudad_id'=> 1,
        ]);
    }
}
