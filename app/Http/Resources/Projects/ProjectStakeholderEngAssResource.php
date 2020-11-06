<?php

namespace App\Http\Resources\Projects;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\StakeholderEngAsses\StakeholderEngAssIndexResource; 
use App\Http\Resources\PrivateUserResource; 

use App\Models\Queries\ProjectQuery; 
use App\Models\Project; 


class ProjectStakeholderEngAssResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id, 
            'date_prepared' => $this->date_prepared, 
            'name' => $this->name, 
            'project_title' => $this->project_title, 
            'project_manager' => new PrivateUserResource(
                (new ProjectQuery(Project::find($this->id)))->projectManager()
            ),
            'stakeholder_engagement_assessments' => StakeholderEngAssIndexResource::collection(
                $this->whenLoaded('stakeholderEngAsses')
            ), 
        ];
    }
}
