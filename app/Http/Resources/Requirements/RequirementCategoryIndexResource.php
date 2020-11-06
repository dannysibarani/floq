<?php

namespace App\Http\Resources\Requirements;

use Illuminate\Http\Resources\Json\JsonResource;

class RequirementCategoryIndexResource extends JsonResource
{
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
