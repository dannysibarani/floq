<?php

use Illuminate\Database\Seeder;

use App\Models\Project; 
use App\Models\Role; 
use App\Models\StakeholderAnalysis; 

use App\Models\Enums\Power; 
use App\Models\Enums\Interest; 
use App\Models\Enums\Influence; 
use App\Models\Enums\Attitude; 

class StakeholderAnalysesTableSeeder extends Seeder
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

		$user = $users->where('name', 'Palti Hutapea')->first(); 
		$projectRole = $user->projectRoles()->first(); 
		StakeholderAnalysis::create([
			'project_id' => $project->id, 
			'user_id' => $user->id, 
			'project_role_id' => $projectRole->id, 
			'power' => Power::LOW, 
			'interest' => Interest::HIGH, 
			'influence' => Influence::LOW, 
			'attitude' => attitude::NEUTRAL, 
		]);

		$user = $users->where('name', 'Lukman Hakim')->first(); 
		$projectRole = $user->projectRoles()->first(); 
		StakeholderAnalysis::create([
			'project_id' => $project->id, 
			'user_id' => $user->id, 
			'project_role_id' => $projectRole->id, 
			'power' => Power::HIGH, 
			'interest' => Interest::HIGH, 
			'influence' => Influence::HIGH, 
			'attitude' => attitude::SUPPORTIVE, 
		]); 

		$user = $users->where('name', 'Ronny Pryadi Ismaya')->first(); 
		$projectRole = $user->projectRoles()->first(); 
		StakeholderAnalysis::create([
			'project_id' => $project->id, 
			'user_id' => $user->id, 
			'project_role_id' => $projectRole->id, 
			'power' => Power::HIGH, 
			'interest' => Interest::HIGH, 
			'influence' => Influence::HIGH, 
			'attitude' => attitude::SUPPORTIVE, 
		]); 

		$user = $users->where('name', 'Probosuwarto')->first(); 
		$projectRole = $user->projectRoles()->first(); 
		StakeholderAnalysis::create([
			'project_id' => $project->id, 
			'user_id' => $user->id, 
			'project_role_id' => $projectRole->id, 
			'power' => Power::MEDIUM, 
			'interest' => Interest::HIGH, 
			'influence' => Influence::HIGH, 
			'attitude' => attitude::LEADING, 
		]); 	

		$user = $users->where('name', 'Bambang Saptono')->first(); 
		$projectRole = $user->projectRoles()->first(); 
		StakeholderAnalysis::create([
			'project_id' => $project->id, 
			'user_id' => $user->id, 
			'project_role_id' => $projectRole->id, 
			'power' => Power::MEDIUM, 
			'interest' => Interest::HIGH, 
			'influence' => Influence::MEDIUM, 
			'attitude' => attitude::NEUTRAL, 
		]); 	

		$user = $users->where('name', 'Asep Supriatna')->first(); 
		$projectRole = $user->projectRoles()->first(); 
		StakeholderAnalysis::create([
			'project_id' => $project->id, 
			'user_id' => $user->id, 
			'project_role_id' => $projectRole->id, 
			'power' => Power::MEDIUM, 
			'interest' => Interest::LOW, 
			'influence' => Influence::MEDIUM, 
			'attitude' => attitude::RESISTANT, 
		]); 
    }
}
