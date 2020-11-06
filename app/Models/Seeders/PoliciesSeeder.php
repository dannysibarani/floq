<?php

namespace App\Models\Seeders; 

use App\Models\Policy; 


class PoliciesSeeder
{
	public static function create()
	{
		Policy::create([
			'name' => 'VIEW', 
			'description' => 'Ability to view a resource', 
		]); 

		Policy::create([
			'name' => 'CREATE', 
			'description' => 'Ability to create/add a resource', 
		]); 

		Policy::create([
			'name' => 'UPDATE', 
			'description' => 'Ability to update a resource', 
		]); 

		Policy::create([
			'name' => 'APPROVE', 
			'description' => 'Ability to approve a resource', 
		]); 

		Policy::create([
			'name' => 'DELETE', 
			'description' => 'Ability to delete a resource', 
		]); 
	}
}