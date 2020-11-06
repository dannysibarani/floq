<?php

use Illuminate\Database\Seeder;

use App\Models\Project; 
use App\Models\Requirement\RequirementPhase; 

class RequirementPhasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$project = Project::where('name', 'PIAMSBBFP')->first(); 

		RequirementPhase::create([
			'project_id' => $project->id, 
			'name' => 'FIRST_RELEASE', 
			'description' => 'First Release', 
		]);

		RequirementPhase::create([
			'project_id' => $project->id, 
			'name' => 'UNSPECIFIED', 
			'description' => 'Unspecified', 
		]);
    }
}
