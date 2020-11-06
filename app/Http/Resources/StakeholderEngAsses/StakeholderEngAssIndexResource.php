<?php

namespace App\Http\Resources\StakeholderEngAsses;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\PrivateUserResource; 


class StakeholderEngAssIndexResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id, 
            'project_id' => $this->project_id, 
            'unware' => $this->unware, 
            'resistant' => $this->resistant, 
            'neutral' => $this->neutral, 
            'supportive' => $this->supportive, 
            'leading' => $this->leading, 
            'user' => $this->userPayload(), 
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
}
