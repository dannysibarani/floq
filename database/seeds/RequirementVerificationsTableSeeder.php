<?php

use Illuminate\Database\Seeder;

use App\Models\Project; 
use App\Models\Requirement\RequirementVerification; 

class RequirementVerificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$project = Project::where('name', 'PIAMSBBFP')->first(); 

		RequirementVerification::create([
			'project_id' => $project->id, 
			'name' => 'TEST', 
			'description' => 'Test', 
		]);

		RequirementVerification::create([
			'project_id' => $project->id, 
			'name' => 'INSPECTION', 
			'description' => 'Inspection', 
		]);

		RequirementVerification::create([
			'project_id' => $project->id, 
			'name' => 'DEMONSTRATION', 
			'description' => 'Demonstration', 
		]);

		RequirementVerification::create([
			'project_id' => $project->id, 
			'name' => 'ANALYSIS', 
			'description' => 'Analysis', 
		]);

		RequirementVerification::create([
			'project_id' => $project->id, 
			'name' => 'UNSPECIFIED', 
			'description' => 'Unspecified', 
		]);
    }
}
