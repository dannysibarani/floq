<?php

namespace App\Http\Resources\Requirements;

use Illuminate\Http\Resources\Json\JsonResource;

class RequirementPriorityIndexResource extends JsonResource
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
            'id' => $this->id, 
            'project_id' => $this->project_id, 
            'name' => $this->name, 
            'description' => $this->description, 
        ];
    }
}
