<?php

use Illuminate\Database\Seeder;

use App\Models\Seeders\ProjectRolesSeeder;
use App\Models\User; 
use App\Models\ProjectRole; 

class ProjectRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$userAdmin = User::where('name', 'danny')->first(); 
		$project = $userAdmin->projects()->where('name', 'PIAMSBBFP')->first(); 

		//MINIMAL PROJECT'S ROLES
		//ProjectRolesSeeder::create($project->id); //already create on ProjectObserve

        /**
            Administrator will create CUSTOM ROLE
        **/
		ProjectRole::create([
			'project_id' => $project->id, 
			'name' => 'End-user Representative', 
			'description' => 'End-user Representative', 
		]); 

		ProjectRole::create([
            'project_id' => $project->id, 
            'name' => 'Head of IT Application Development', 
            'description' => 'Head of IT Application Development', 
		]); 

		ProjectRole::create([
            'project_id' => $project->id, 
            'name' => 'Head of Operation', 
            'description' => 'Head of Operation', 
		]); 
    }
}
