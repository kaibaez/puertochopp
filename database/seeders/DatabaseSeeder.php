<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PaisSeeder::class);
        $this->call(SucursalSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CiudadSeeder::class);
        $this->call(BarrioSeeder::class);
        ##$this->call(CargoSeeder::class);
    }
}
