<?php

use Illuminate\Database\Seeder;

use App\Models\Project; 
use App\Models\ProjectCharter\ProjectCharterApproval; 

class ProjectCharterApprovalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$project = Project::where('name', 'PIAMSBBFP')->first(); 
        $projectCharter = $project->charter()->get()->first(); 
        $users = $project->users()->get(); 

        foreach($users as $user) {
            $projectRoles = $user->projectRoles()->get(); 
            foreach($projectRoles as $projectRole) {
                if($projectRole->name == 'Project Sponsor' || $projectRole->name == 'Project Manager') {
                    ProjectCharterApproval::create([
                        'project_charter_id' => $projectCharter->id, 
                        'user_id' => $user->id, 
                        'project_role_id' => $projectRole->id, 
                        'signature' => 'path/to/image/signature.jpg', 
                        'approved' => true, 
                        'date' => now(), 
                    ]); 
                }
            }
        }
    }
}

