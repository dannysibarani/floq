<?php

namespace App\Policies\Traits; 

use App\Models\Queries\UserQuery; 

trait HandlePermission {
	public function isPermitted($user, $project_id, $policy_name, $resource_name) {
        $userQuery = new UserQuery($user); 
        if($userQuery->hasSuperAdministrator()) return true; 

        if(
            !$userQuery->hasAdministrator() && 
            !$userQuery->isPermitted($project_id, $policy_name, $resource_name)
        ) return false; 

        if(!$userQuery->hasProject($project_id)) return false;

        return true; 
	}
}