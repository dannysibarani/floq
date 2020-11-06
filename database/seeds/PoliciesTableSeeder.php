<?php

use Illuminate\Database\Seeder;

use App\Models\Seeders\PoliciesSeeder; 


class PoliciesTableSeeder extends Seeder
{
    public function run()
    {
        PoliciesSeeder::create(); 
    }
}
