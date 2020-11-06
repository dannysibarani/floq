<?php

namespace App\Http\Resources\ComManPlans;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\PrivateUserResource; 
use App\Http\Resources\Projects\ProjectIndexResource; 

use App\Models\Project; 


class ComManPlanShowResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id, 
            'information' => $this->information, 
            'method' => $this->method, 
            'timing_or_frequency' => $this->timing_or_frequency, 
            'sender_or_initiator' => $this->sender_or_initiator, 
            'user' => $this->userPayload(),
            'project' => $this->projectPayload(),  
        ];
    }

    private function userPayload() {
        return $this->when(
            $this->relationLoaded('user'), 
            function() {
                return new PrivateUserResource($this->user); 
            }
        ); 
    }

    private function projectPayload() {
        $project = Project::find($this->project_id); 
        return new ProjectIndexResource($project); 
    }
}
