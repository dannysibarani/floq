<?php

namespace App\Http\Resources\Projects;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\Projects\ProjectIndexResource; 
use App\Http\Resources\ProjectCharters\ProjectCharterIndexResource; 

class ProjectShowResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return array_merge(
            parent::toArray($request), 
            [
                'id' => $this->id, 
                'date_prepared' => $this->date_prepared, 
                'name' => $this->name, 
                'project_title' => $this->project_title, 
                'project_charter' => new ProjectCharterIndexResource($this->charter), 
            ]
        );
    }
}
