<?php

use Illuminate\Database\Seeder;

use App\Models\ComManPlan; 
use App\Models\Project; 

class ComManPlansTableSeeder extends Seeder
{
    public function run()
    {
		$project = Project::where('name', 'PIAMSBBFP')->first(); 
		$users = $project->users()->get(); 

		$user = $users->where('name', 'Palti Hutapea')->first(); 
		ComManPlan::create([
				'project_id' => $project->id, 
				'user_id' => $user->id, 
				'information' => 'Project Status Report', 
				'method' => 'Email', 
				'timing_or_frequency' => 'Seminggu sekali, Selasa 9am', 
				'sender_or_initiator' => 'PM', 
			]);

		$user = $users->where('name', 'Lukman Hakim')->first(); 
		ComManPlan::create([
				'project_id' => $project->id, 
				'user_id' => $user->id, 
				'information' => 'Project Status Report', 
				'method' => 'Email', 
				'timing_or_frequency' => 'Seminggu sekali, Selasa 9am', 
				'sender_or_initiator' => 'PM', 
			]);

		$user = $users->where('name', 'Lukman Hakim')->first(); 
		ComManPlan::create([
				'project_id' => $project->id, 
				'user_id' => $user->id, 
				'information' => 'Daily Updates', 
				'method' => 'WhatsApp', 
				'timing_or_frequency' => 'Hari kerja, 5pm', 
				'sender_or_initiator' => 'PM', 
			]);

		$user = $users->where('name', 'Ronny Pryadi Ismaya')->first(); 
		ComManPlan::create([
				'project_id' => $project->id, 
				'user_id' => $user->id, 
				'information' => 'Project Status Report', 
				'method' => 'Email', 
				'timing_or_frequency' => 'Seminggu sekali, Selasa 9am', 
				'sender_or_initiator' => 'PM', 
			]);

		$user = $users->where('name', 'Probosuwarto')->first(); 
		ComManPlan::create([
				'project_id' => $project->id, 
				'user_id' => $user->id, 
				'information' => 'Project Status Report', 
				'method' => 'Email', 
				'timing_or_frequency' => 'Seminggu sekali, Selasa 9am', 
				'sender_or_initiator' => 'PM', 
			]);

		$user = $users->where('name', 'Probosuwarto')->first(); 
		ComManPlan::create([
				'project_id' => $project->id, 
				'user_id' => $user->id, 
				'information' => 'Daily Updates', 
				'method' => 'WhatsApp', 
				'timing_or_frequency' => 'Hari kerja, 5pm', 
				'sender_or_initiator' => 'PM', 
			]);

		$user = $users->where('name', 'Probosuwarto')->first(); 
		ComManPlan::create([
				'project_id' => $project->id, 
				'user_id' => $user->id, 
				'information' => 'Escalation meeting', 
				'method' => 'Tatap muka', 
				'timing_or_frequency' => 'Dua kali seminggu', 
				'sender_or_initiator' => 'PM', 
			]);

		$user = $users->where('name', 'Bambang Saptono')->first(); 
		ComManPlan::create([
				'project_id' => $project->id, 
				'user_id' => $user->id, 
				'information' => 'Project Status Report', 
				'method' => 'Email', 
				'timing_or_frequency' => 'Seminggu sekali, Selasa 9am', 
				'sender_or_initiator' => 'PM', 
			]);

		$user = $users->where('name', 'Asep Supriatna')->first(); 
		ComManPlan::create([
				'project_id' => $project->id, 
				'user_id' => $user->id, 
				'information' => 'Project Status Report', 
				'method' => 'Email', 
				'timing_or_frequency' => 'Seminggu sekali, Selasa 9am', 
				'sender_or_initiator' => 'PM', 
			]);
    }
}
