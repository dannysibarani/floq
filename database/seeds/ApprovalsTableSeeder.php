<?php

use Illuminate\Database\Seeder;

use App\Models\Project; 
use App\Models\Approval; 
use App\Models\Resource; 

class ApprovalsTableSeeder extends Seeder
{

    public function run()
    {
    	$project = Project::where('name', 'PIAMSBBFP')->first(); 
        $projectCharter = $project->charter; 
        $resource = Resource::where('name', 'PROJECT_CHARTER')->first(); 
        $users = $project->users()->get(); 

        foreach($users as $user) {
            $projectRoles = $user->projectRoles()->get(); 
            foreach($projectRoles as $projectRole) {
                if($projectRole->name == 'Project Sponsor' || $projectRole->name == 'Project Manager') {
                    $approval = Approval::make([
                        'project_id' => $project->id, 
                        'user_id' => $user->id, 
                        'project_role_id' => $projectRole->id, 
                        'resource_id' => $resource->id, 
                        'signature' => 'path/to/image/signature.jpg', 
                        'approved' => true, 
                        'date' => now(), 
                    ]);

                    $projectCharter->approvals()->save($approval);
                }
            }
        }
    }
}
