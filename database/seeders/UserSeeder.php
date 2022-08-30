<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Carlos Báez',
            'email' => 'carlos@proyectosanjose.com.py',
            'password' => bcrypt('crKKbl64'),
        ]);

        User::create([
            'name' => 'Enrique Fleitas',
            'email' => 'enrique@proyectosanjose.com.py',
            'password' => bcrypt('12345'),
        ]);

        User::create([
            'name' => 'Patricia Duarte',
            'email' => 'patricia@proyectosanjose.com.py',
            'password' => bcrypt('12345'),
        ]);
    }
}
