<?php

namespace App\Http\Resources\ProjectCharters;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectCharterAuthorityIndexResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'staffing_decision' => $this->staffing_decision, 
            'budget_management_and_variance' => $this->budget_management_and_variance, 
            'technical_decisions' => $this->technical_decisions, 
            'conflict_resolution' => $this->conflict_resolution, 
            'sponsor_authority' => $this->sponsor_authority, 
        ];
    }
}
