<?php

use Illuminate\Database\Seeder;

use App\Models\Project; 
use App\Models\WbsResource; 

class WbsResourcesTableSeeder extends Seeder
{
    public function run()
    {
		$project = Project::where('name', 'PIAMSBBFP')->first();

		/*Minimal and default value must have 'UNSPECIFIED' */
		WbsResource::create([
			'project_id' => $project->id, 
			'name' => 'UNSPECIFIED', 
			'description' => 'Unspecified', 
		]); 

		WbsResource::create([
			'project_id' => $project->id, 
			'name' => 'PM', 
			'description' => 'Project Manager', 
		]); 

		WbsResource::create([
			'project_id' => $project->id, 
			'name' => 'System Architec', 
			'description' => 'System Architec', 
		]); 

		WbsResource::create([
			'project_id' => $project->id, 
			'name' => 'IT Support', 
			'description' => 'IT Support', 
		]); 

		WbsResource::create([
			'project_id' => $project->id, 
			'name' => 'Programmers', 
			'description' => 'Programmers', 
		]); 
    }
}
