<?php

namespace App\Http\Resources\ProjectCharters;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectCharterScheduleIndexResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'project_charter_id' => $this->project_charter_id, 
            'milestone' => $this->milestone, 
            'due_date' => $this->due_date, 
            'order' => $this->order, 
            'description' => $this->description, 
        ]; 
    }
}
