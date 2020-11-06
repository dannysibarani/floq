<?php

namespace App\Http\Resources\ProjectScopeStatements;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Models\Queries\ProjectQuery;

use App\Http\Resources\Projects\ProjectIndexResource; 
use App\Http\Resources\PrivateUserResource; 


class ProjectScopeStatementIndexResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'project_scope_defenition' => $this->project_scope_defenition, 
            'project_deliverables' => $this->project_deliverables, 
            'product_acceptance_criteria' => $this->product_acceptance_criteria, 
            'project_exclusion' => $this->project_exclusion, 
            'project_constraints' => $this->project_constrains, 
            'project_assumptions' => $this->project_assumptions, 
            'project' => $this->projectPayload(), 
            'project_manager' => new PrivateUserResource(
                (new ProjectQuery($this->project))->projectManager()
            ),
        ];
    }

    private function projectPayload() {
        return $this->when(
            $this->relationLoaded('project'), 
            function() {
                return new ProjectIndexResource($this->project); 
            }
        );
    }
}
