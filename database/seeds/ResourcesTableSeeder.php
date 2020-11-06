<?php

use Illuminate\Database\Seeder;

use App\Models\Seeders\ResourcesSeeder; 


class ResourcesTableSeeder extends Seeder
{
    public function run()
    {
    	ResourcesSeeder::create(); 
    }
}
