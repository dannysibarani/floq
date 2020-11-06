<?php

namespace App\Http\Resources\StakeholderEngAsses;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\Projects\ProjectIndexResource; 
use App\Http\Resources\PrivateUserResource; 

use App\Models\Project; 

class StakeholderEngAssShowResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id, 
            'unware' => $this->unware, 
            'resistant' => $this->resistant, 
            'neutral' => $this->neutral, 
            'supportive' => $this->supportive, 
            'leading' => $this->leading, 
            'user' => $this->userPayload(), 
            'project' => $this->projectPayload(), 
        ]; 
    }

    private function userPayload() {
        return $this->when(
            $this->relationLoaded('user'), 
            function(){
                return new PrivateUserResource($this->user); 
            }
        ); 
    }

    private function projectPayload() {
        $project = Project::find($this->project_id); 
        return new ProjectIndexResource($project); 
    }
}
