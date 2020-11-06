<?php

namespace App\Http\Resources\StakeholderRegisters;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Models\Traits\ProjectPayload;
use App\Models\Traits\UserPayload; 
use App\Models\Traits\ProjectRolePayload; 


class StakeholderRegisterIndexResource extends JsonResource
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
            'requirements' => $this->requirements, 
            'expectation' => $this->expectation, 
            'classification' => $this->classification, 
        ]; 
    }

}
