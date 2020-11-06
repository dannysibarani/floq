<?php

namespace App\Http\Resources\QualityMetrics;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\Projects\ProjectIndexResource; 

use App\Models\Project; 


class QualityMetricShowResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id, 
            'sid' => $this->sid, 
            'items' => $this->items, 
            'metric' => $this->metric, 
            'measurement_method' => $this->measurement_method, 
            'project' => $this->projectPayload(), 
        ]; 
    }

    private function projectPayload() {
        $project = Project::find($this->project_id); 
        return new ProjectIndexResource($project); 
    }
}
