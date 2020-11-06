<?php

use Illuminate\Database\Seeder;


use App\Models\Permission; 


class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Permission::create([
			'name' => 'CREATE', 
			'description' => 'Ability to create Project and Project Role'
		]); 

		Permission::create([
			'name' => 'VIEW', 
			'description' => 'Ability to view Project and Project Role'
		]); 

		Permission::create([
			'name' => 'UPDATE', 
			'description' => 'Ability to update Project and Project Role'
		]); 

		Permission::create([
			'name' => 'DELETE', 
			'description' => 'Ability to delete Project and Project Role'
		]); 
    }
}
