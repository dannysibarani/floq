<?php

namespace App\Http\Resources\QualityMetrics;

use Illuminate\Http\Resources\Json\JsonResource;

class QualityMetricIndexResource extends JsonResource
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
            'sid' => $this->sid, 
            'items' => $this->items, 
            'metric' => $this->metric, 
            'measurement_method' => $this->measurement_method, 
        ]; 
    }
    
}
