<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Ward;


class WardSeeder extends Seeder
{
    
    public function run(): void
    {
        Ward::factory()->count(20)->create();

        $users_guards = User::where('role_id', 3)->get();
        // dd($users_guards);
        // dd(count($users_guards));

        $wards=Ward::all();

        // Los guardias pueden estar en varios pabellones
        // https://laravel.com/docs/9.x/collections#macro-arguments
        $wards->each(function($ward) use ($users_guards)
        {
            // https://laravel.com/docs/9.x/collections#method-shift
            $ward->users()->attach($users_guards->shift(2));
        });


    }
}
