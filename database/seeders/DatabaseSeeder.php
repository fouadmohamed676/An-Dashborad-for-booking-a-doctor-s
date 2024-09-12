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
        // \App\Models\User::factory(10)->create();
        // \App\Models\Admin::factory(5)->create(); 
        \App\Models\Patient::factory(10)->create();  
        \App\Models\Genders::factory(2)->create(); 
        \App\Models\Services::factory(5)->create(); 
        \App\Models\Orders::factory(10)->create(); 
        \App\Models\University::factory(1)->create();  
        \App\Models\Status::factory(3)->create(); 
        \App\Models\Banner::factory(3)->create(); 
    }
}
