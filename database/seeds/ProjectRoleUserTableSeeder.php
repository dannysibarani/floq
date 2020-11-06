<?php

use Illuminate\Database\Seeder;

use App\Models\Project; 
use App\Models\ProjectRole; 


class ProjectRoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$project = Project::where('name', 'PIAMSBBFP')->first(); 
		$users = $project->users()->get(); 
		$projectRoles = ProjectRole::get(); 

		/*$user = $users->where('name', 'danny')->first(); 
		$projectRole = $projectRoles->where('name', 'Administrator')->first(); 
		$user->projectRoles()->attach($projectRole, [
			'project_user_id' => $user->pivot->id, 
			'user_id' => $user->id, 
			'project_id' => $project->id, 
		]);*/

		$user = $users->where('name', 'Palti Hutapea')->first(); 
		$projectRole = $projectRoles->where('name', 'End-user Representative')->first(); 
		$user->projectRoles()->attach($projectRole); 

		$user = $users->where('name', 'Lukman Hakim')->first(); 
		$projectRole = $projectRoles->where('name', 'Project Sponsor')->first(); 
		$user->projectRoles()->attach($projectRole); 

		$user = $users->where('name', 'Ronny Pryadi Ismaya')->first(); 
		$projectRole = $projectRoles->where('name', 'Project Customer')->first(); 
		$user->projectRoles()->attach($projectRole); 

		$user = $users->where('name', 'Probosuwarto')->first(); 
		$projectRole = $projectRoles->where('name', 'Product Manager')->first(); 
		$user->projectRoles()->attach($projectRole); 

		$user = $users->where('name', 'Bambang Saptono')->first(); 
		$projectRole = $projectRoles->where('name', 'Head of IT Application Development')->first(); 
		$user->projectRoles()->attach($projectRole); 

		$user = $users->where('name', 'Asep Supriatna')->first(); 
		$projectRole = $projectRoles->where('name', 'Head of Operation')->first(); 
		$user->projectRoles()->attach($projectRole); 

		$user = $users->where('name', 'Moh Dwiki Argawinata')->first(); 
		$projectRole = $projectRoles->where('name', 'Project Manager')->first(); 
		$user->projectRoles()->attach($projectRole); 
    }
}
