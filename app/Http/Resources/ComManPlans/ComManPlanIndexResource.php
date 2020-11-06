<?php

namespace App\Http\Resources\ComManPlans;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\PrivateUserResource; 


class ComManPlanIndexResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id, 
            'project_id' => $this->project_id, 
            'information' => $this->information, 
            'method' => $this->method, 
            'timing_or_frequency' => $this->timing_or_frequency, 
            'sender_or_initiator' => $this->sender_or_initiator, 
            'user' => $this->userPayload(), 
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
}