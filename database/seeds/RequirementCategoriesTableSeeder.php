<?php

use Illuminate\Database\Seeder;


use App\Models\Project; 
use App\Models\Requirement\RequirementCategory; 


class RequirementCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$project = Project::where('name', 'PIAMSBBFP')->first(); 

		RequirementCategory::create([
			'project_id' => $project->id, 
			'name' => 'TECHNICAL', 
			'description' => 'Technical', 
		]);

		RequirementCategory::create([
			'project_id' => $project->id, 
			'name' => 'MAINTAINABILITY', 
			'description' => 'Maintainability', 
		]);

		RequirementCategory::create([
			'project_id' => $project->id, 
			'name' => 'SECURITY', 
			'description' => 'Security', 
		]);

		RequirementCategory::create([
			'project_id' => $project->id, 
			'name' => 'NONFUNCTIONAL', 
			'description' => 'Non-Functional', 
		]);

		RequirementCategory::create([
			'project_id' => $project->id, 
			'name' => 'FUNCTIONAL', 
			'description' => 'Functional', 
		]);

		RequirementCategory::create([
			'project_id' => $project->id, 
			'name' => 'UNSPECIFIED', 
			'description' => 'Unspecified', 
		]);
    }
}
