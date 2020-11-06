<?php

use Illuminate\Database\Seeder;

use App\Models\Project; 
use App\Models\Requirement\RequirementPriority; 

class RequirementPrioritiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$project = Project::where('name', 'PIAMSBBFP')->first(); 

		RequirementPriority::create([
			'project_id' => $project->id, 
			'name' => 'MUST_HAVE', 
			'description' => 'Must Have', 
		]);

		RequirementPriority::create([
			'project_id' => $project->id, 
			'name' => 'SHOULD_HAVE', 
			'description' => 'Should Have', 
		]);

		RequirementPriority::create([
			'project_id' => $project->id, 
			'name' => 'NICE_TO_HAVE', 
			'description' => 'Nice To Have', 
		]);

		RequirementPriority::create([
			'project_id' => $project->id, 
			'name' => 'LEVEL_1', 
			'description' => 'Level 1', 
		]);

		RequirementPriority::create([
			'project_id' => $project->id, 
			'name' => 'LEVEL_2', 
			'description' => 'Level 2', 
		]);

		RequirementPriority::create([
			'project_id' => $project->id, 
			'name' => 'LEVEL_3', 
			'description' => 'Level 3', 
		]);

		RequirementPriority::create([
			'project_id' => $project->id, 
			'name' => 'LEVEL_4', 
			'description' => 'Level 4', 
		]);

		RequirementPriority::create([
			'project_id' => $project->id, 
			'name' => 'UNSPECIFIED', 
			'description' => 'Unspecified', 
		]);
    }
}
