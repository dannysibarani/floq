<?php

namespace App\Http\Resources\Projects;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\ProjectScopeStatements\ProjectScopeStatementIndexResource; 
use App\Http\Resources\PrivateUserResource; 
use App\Http\Resources\RiskRegisters\RiskRegisterIndexResource; 

use App\Models\Project; 

use App\Models\Queries\ProjectQuery; 


class ProjectRiskRegisterResource extends JsonResource
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
            'risk_registers' => RiskRegisterIndexResource::collection(
                $this->whenLoaded('riskRegisters')
            ), 
        ];
    }
}
