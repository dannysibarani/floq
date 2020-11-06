<?php

namespace App\Models\Traits; 

use Illuminate\Http\Resources\PotentiallyMissing; 

use App\Http\Resources\Projects\ProjectIndexResource; 


trait ProjectPayload {
    protected function projectPayload($project) {
        if($project instanceof PotentiallyMissing) {
            return $project; 
        }
        else {
            return new ProjectIndexResource($project); 
        }
    }
}