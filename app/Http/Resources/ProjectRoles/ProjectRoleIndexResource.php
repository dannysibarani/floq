<?php

namespace App\Http\Resources\ProjectRoles;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectRoleIndexResource extends JsonResource
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
