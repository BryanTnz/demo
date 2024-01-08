<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Ward;
use App\Models\Jail;

class JailSeeder extends Seeder
{
    
    public function run(): void
    {
        // Los pabellones pueden tener muchas carceles
        $wards = Ward::all();

        $wards->each(function($ward)
        {
            Jail::factory()->count(3)->for($ward)->create();
        });

        // las carceles pueden tener muchos usuarios
        $jails=Jail::all();
        $users_prisoers = User::where('role_id',4)->get();
        $jails->each(function($jail) use ($users_prisoers)
        {
            $jail->users()->attach($users_prisoers->shift(5));
        });
        
        
    }
}
