<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    { 
        $role1 = Role::create(['name' =>'Admin']);
        $role2 = Role::create(['name' =>'Propietario']);
        $role3 = Role::create(['name' =>'Ti']);

        Permission::create(['name' =>'rh.cargos.index'])->assignRole([$role1]);   
        Permission::create(['name' =>'rh.cargos.create'])->assignRole([$role1]);
        Permission::create(['name' =>'rh.cargos.edit'])->assignRole([$role1]);   
        Permission::create(['name' =>'rh.cargos.destroy'])->assignRole([$role1]);        
        
    }
}
