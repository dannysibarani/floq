<?php

namespace App\Http\Resources\RiskRegisters;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\ProjectRoles\ProjectRoleIndexResource; 
use App\Http\Resources\Projects\ProjectIndexResource; 

use App\Models\ProjectRole; 


class RiskRegisterIndexResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id, 
            'project_id' => $this->project_id, 
            'sid' => $this->sid, 
            'risk_category' => $this->risk_category, 
            'risk_event' => $this->risk_event, 
            'probability' => $this->probability, 
            'impact' => $this->impact, 
            'pxi' => $this->pxi, 
            'cost_value' => $this->formattedCostValue, 
            'contigency_value' => $this->formattedContigencyValue, 
            'risk_response' => $this->risk_response, 
            'project_role' => $this->projectRolePayload(), 
        ];
    }

    private function projectRolePayload() {
        $projectRole = ProjectRole::find($this->project_role_id); 
        return new ProjectRoleIndexResource($projectRole); 
    }
}
