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
        Barrio::create([
            'descripcion'=>'Kokua Guazu',
            'ciudad_id'=> 2,
        ]);

        Barrio::create([
            'descripcion'=>'Santa María',
            'ciudad_id'=> 3,
        ]);
        Barrio::create([
            'descripcion'=>'Santa Lucía',
            'ciudad_id'=> 3,
        ]);
        Barrio::create([
            'descripcion'=>'Tayuazape',
            'ciudad_id'=> 3,
        ]);
        Barrio::create([
            'descripcion'=>'Ñu Pora',
            'ciudad_id'=> 3,
        ]);
        Barrio::create([
            'descripcion'=>'Villa Industrial',
            'ciudad_id'=> 3,
        ]);

        Barrio::create([
            'descripcion'=>'Las Mercedes',
            'ciudad_id'=> 3,
        ]);
        Barrio::create([
            'descripcion'=>'Villa Laurelty',
            'ciudad_id'=> 3,
        ]);
        Barrio::create([
            'descripcion'=>'Virgen de Fátima',
            'ciudad_id'=> 3,
        ]);

        Barrio::create([
            'descripcion'=>'Reducto',
            'ciudad_id'=> 3,
        ]);

        Barrio::create([
            'descripcion'=>'Caaguazú',
            'ciudad_id'=> 4
        ]);
        Barrio::create([
            'descripcion'=>'Cerrito',
            'ciudad_id'=> 4,
        ]);
        Barrio::create([
            'descripcion'=>'San Lorenzo',
            'ciudad_id'=> 5,
        ]);
        Barrio::create([
            'descripcion'=>'Luz María',
            'ciudad_id'=> 6,
        ]);
    }
}
