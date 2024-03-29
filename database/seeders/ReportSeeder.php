<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Report;

class ReportSeeder extends Seeder
{
    
    public function run(): void
    {
        // https://laravel.com/docs/9.x/queries#retrieving-all-rows-from-a-table
        $users_guards = User::where('role_id',3)->get();
        // dd($users_guards);
        // dd(count($users_guards));

        // Por cada guardia se asigna 2 reportes
        // https://laravel.com/docs/9.x/collections#available-methods
        $users_guards->each(function($user)
        {
            // https://laravel.com/docs/9.x/database-testing#belongs-to-relationships
            Report::factory()->count(2)->for($user)->create();
        });
        
        
    }
}
