<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        \App\Models\Services::factory(3)->create();
    }
}
