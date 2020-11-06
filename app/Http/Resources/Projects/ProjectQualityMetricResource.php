<?php

namespace App\Http\Resources\Projects;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\QualityMetrics\QualityMetricIndexResource; 
use App\Http\Resources\PrivateUserResource; 

use App\Models\Project; 

use App\Models\Queries\ProjectQuery; 

class ProjectQualityMetricResource extends JsonResource
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
            'project_manager' => new PrivateUserResource(
                (new ProjectQuery(Project::find($this->id)))->projectManager()
            ),
            'quality_metrics' => QualityMetricIndexResource::collection(
                $this->whenLoaded('qualityMetrics')
            ), 
        ];
    }
}