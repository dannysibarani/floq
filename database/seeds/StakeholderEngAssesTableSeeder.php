<?php

use Illuminate\Database\Seeder;

use App\Models\StakeholderEngAss; 
use App\Models\Project; 

use App\Models\Enums\StakeholderEngAss as Enum; 

class StakeholderEngAssesTableSeeder extends Seeder
{
    public function run()
    {
		$project = Project::where('name', 'PIAMSBBFP')->first(); 
		$users = $project->users()->get(); 

		$user = $users->where('name', 'Palti Hutapea')->first(); 
		StakeholderEngAss::create([
				'project_id' => $project->id, 
				'user_id' => $user->id, 
				'unware' => Enum::CURRENT, 
				'resistant' => Enum::DEFAULT, 
				'neutral' => Enum::DEFAULT, 
				'supportive' => Enum::DESIRED, 
				'leading' => Enum::DEFAULT, 
			]);

		$user = $users->where('name', 'Lukman Hakim')->first(); 
		StakeholderEngAss::create([
				'project_id' => $project->id, 
				'user_id' => $user->id, 
				'unware' => Enum::DEFAULT,
				'resistant' => Enum::DEFAULT, 
				'neutral' => Enum::DEFAULT, 
				'supportive' => Enum::CURRENT_DESIRED, 
				'leading' => Enum::DEFAULT, 
			]);

		$user = $users->where('name', 'Ronny Pryadi Ismaya')->first(); 
		StakeholderEngAss::create([
				'project_id' => $project->id, 
				'user_id' => $user->id, 
				'unware' => Enum::DEFAULT,
				'resistant' => Enum::DEFAULT, 
				'neutral' => Enum::DEFAULT, 
				'supportive' => Enum::CURRENT_DESIRED, 
				'leading' => Enum::DEFAULT, 
			]);

		$user = $users->where('name', 'Probosuwarto')->first(); 
		StakeholderEngAss::create([
				'project_id' => $project->id, 
				'user_id' => $user->id, 
				'unware' => Enum::DEFAULT,
				'resistant' => Enum::DEFAULT, 
				'neutral' => Enum::DEFAULT, 
				'supportive' => Enum::DEFAULT, 
				'leading' => Enum::CURRENT_DESIRED, 
			]);

		$user = $users->where('name', 'Bambang Saptono')->first(); 
		StakeholderEngAss::create([
				'project_id' => $project->id, 
				'user_id' => $user->id, 
				'unware' => Enum::DEFAULT,
				'resistant' => Enum::DEFAULT, 
				'neutral' => Enum::CURRENT, 
				'supportive' => Enum::DESIRED, 
				'leading' => Enum::DEFAULT, 
			]);

		$user = $users->where('name', 'Asep Supriatna')->first(); 
		StakeholderEngAss::create([
				'project_id' => $project->id, 
				'user_id' => $user->id, 
				'unware' => Enum::DEFAULT,
				'resistant' => Enum::CURRENT,
				'neutral' => Enum::DEFAULT,
				'supportive' => Enum::DESIRED, 
				'leading' => Enum::DEFAULT, 
			]);

    }
}
