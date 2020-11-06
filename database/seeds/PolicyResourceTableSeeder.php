<?php

use Illuminate\Database\Seeder;

use App\Models\Policy; 
use App\Models\Resource; 

class PolicyResourceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$policies = Policy::get(); 
		$resources = Resource::get(); 

		foreach($policies as $policy) {
			foreach($resources as $resource) {
				$policy->resources()->attach($resource); 
			}
		}
    }
}
