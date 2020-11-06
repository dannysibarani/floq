<?php

namespace App\Http\Resources\Users;

use Illuminate\Http\Resources\Json\JsonResource;

class UserProfileIndexResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'user_id' => $this->user_id, 
            'first_name' => $this->first_name, 
            'middle_name' => $this->middle_name, 
            'last_name' => $this->last_name, 
            'date_of_birth' => $this->date_of_birth, 
            'place_of_birth' => $this->place_of_birth, 
            'nationality' => $this->nationality, 
            'sex' => $this->sex, 
            'relationship_status' => $this->relationship_status, 
            'avatar' => $this->avatar, 
        ]; 
    }
}
