<?php

namespace App\Http\Resources\Projects;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectIndexResource extends JsonResource
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
            'date_prepared' => $this->date_prepared, 
            'name' => $this->name, 
            'project_title' => $this->project_title, 
        ]; 
    }
}
