<?php

namespace App\Http\Resources\Users;

use Illuminate\Http\Resources\Json\JsonResource;

class UserContactIndexResource extends JsonResource
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
            'phone_number' => $this->phone_number, 
            'phone_type' => $this->phone_type, 
            'phone_status' => $this->phone_status, 
        ]; 
    }
}
