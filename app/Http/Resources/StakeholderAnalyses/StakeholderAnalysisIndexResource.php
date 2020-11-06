<?php

namespace App\Http\Resources\StakeholderAnalyses;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Models\Traits\ProjectPayload;
use App\Models\Traits\UserPayload; 
use App\Models\Traits\ProjectRolePayload; 


class StakeholderAnalysisIndexResource extends JsonResource
{
    use ProjectPayload, UserPayload, ProjectRolePayload;  


    public function toArray($request)
    {
        return [
            'id' => $this->id, 
            'project' => $this->projectPayload(
                $this->whenLoaded('project')
            ), 
            'user' => $this->userPayload(
                $this->whenLoaded('user')
            ), 
            'project_role' => $this->projectRolePayload(
                $this->whenLoaded('projectRole')
            ), 
            'power' => $this->power, 
            'interest' => $this->interest, 
            'influence' => $this->influence, 
            'attitude' => $this->attitude, 
        ]; 
    }

}