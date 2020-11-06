<?php

namespace App\Models\Traits; 

use Illuminate\Http\Resources\PotentiallyMissing; 

use App\Http\Resources\ProjectRoles\ProjectRoleIndexResource; 


trait ProjectRolePayload {
    protected function projectRolePayload($projectRole) {
        if($projectRole instanceof PotentiallyMissing) {
            return $projectRole;
        }
        else {
            return new ProjectRoleIndexResource($projectRole); 
        }
    }
}