<?php

namespace App\Http\Resources\ProjectCharters;

use Illuminate\Http\Resources\Json\JsonResource;


use App\Http\Resources\Projects\ProjectIndexResource; 
use App\Http\Resources\ProjectCharters\ProjectCharterPoscIndexResource; 

use App\Http\Resources\Projects\ProjectStakeholderResource; 
use App\Http\Resources\Approvals\ApprovalIndexResource; 
use App\Http\Resources\Stakeholders\StakeholderProjectRoleResource; 


//use Illuminate\Http\Resources\PotentiallyMissing; 


use App\Models\Queries\ProjectQuery; 
use App\Http\Resources\PrivateUserResource; 

use App\Models\Project; 


/**
    **$this == ProjectCharter
    **ToLoad == project, posc, schedules, project.stakeholders, authority, approvals
*/

class ProjectCharterIndexResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id, 
            'project' => new ProjectIndexResource(
                $this->whenLoaded('project')
            ), 

            'project_manager' => new PrivateUserResource(
                (new ProjectQuery(Project::find($this->project->id)))->projectManager()
            ),
            'project_sponsor' => new PrivateUserResource(
                (new ProjectQuery(Project::find($this->project->id)))->projectSponsor()
            ),
            'project_customer' => new PrivateUserResource(
                (new ProjectQuery(Project::find($this->project->id)))->projectCustomer()
            ),

            'project_purpose' => $this->project_purpose, 
            'high_level_description' => $this->high_level_description, 
            'project_boundaries' => $this->project_boundaries, 
            'key_deliverables' => $this->key_deliverables, 
            'high_level_requirements' => $this->high_level_requirements, 
            'overall_project_risk' => $this->overall_project_risk, 
            'preapproved_financial_resources' => $this->preapproved_financial_resources, 
            'project_exit_criteria' => $this->project_exit_criteria,
            'posc' => new ProjectCharterPoscIndexResource(
                $this->whenLoaded('posc')
            ), 
            'schedules' => ProjectCharterScheduleIndexResource::collection(
                $this->whenLoaded('schedules')
            ), 
            /*'stakeholders' => $this->stakeholders(
                $this->whenLoaded('project')
            ),*/
            'stakeholders' => $this->stakeholdersPayload(), 

            'authority' => new ProjectCharterAuthorityIndexResource(
                $this->whenLoaded('authority')
            ),
            'approvals' => ApprovalIndexResource::collection(
                $this->whenLoaded('approvals')
            ), 
        ]; 
    }

    /*protected function stakeholders($project) {
        if($project instanceof PotentiallyMissing) {
            return $project;
        }
        else {
            $users = (new ProjectQuery($project))->stakeholders(); 
            $users->load(['profile', 'contacts', 'projectRoles']); 
            return PrivateUserResource::collection($users); 
        }
    }*/

    protected function stakeholdersPayload() {
        return $this->when(
            $this->relationLoaded('project') &&
            $this->project->relationLoaded('stakeholders'), 
            function() {
                return StakeholderProjectRoleResource::collection($this->project->stakeholders); 
            }
        );
    }
}
