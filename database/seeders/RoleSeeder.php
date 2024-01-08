<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Role;

class RoleSeeder extends Seeder
{
   
    public function run(): void
    {
        $rols = ['admin','director','guard','prisoner'];

        for($i=0 ; $i<4 ; $i++)
        {
            Role::create([
                'name' => $rols[$i],
                'slug' => $rols[$i],
            ]);
        }


    }
}
