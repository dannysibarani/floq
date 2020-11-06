<?php

namespace App\Policies\Requirements;

use App\Models\User;
use App\Models\Requirement\RequirementVerification;
use Illuminate\Auth\Access\HandlesAuthorization;

use App\Policies\Traits\HandlePermission; 


class RequirementVerificationPolicy
{
    use HandlesAuthorization, 
        HandlePermission;
    
    public function viewAny(User $user)
    {
        $project_id = request()->project; 
        if(is_null($project_id)) return false; 

        return $this->isPermitted($user, $project_id, 'VIEW', RequirementVerification::$resource_name); 
    }

    public function view(User $user, RequirementVerification $requirementVerification)
    {
        return $this->isPermitted($user, $requirementVerification->project_id, 'VIEW', RequirementVerification::$resource_name); 
    }

    public function create(User $user)
    {
        $project_id = request()->project; 
        if(is_null($project_id)) return false; 

        return $this->isPermitted($user, $project_id, 'CREATE', RequirementVerification::$resource_name); 
    }

    public function update(User $user, RequirementVerification $requirementVerification)
    {
        return $this->isPermitted($user, $requirementVerification->project_id, 'UPDATE', RequirementVerification::$resource_name); 
    }

    public function delete(User $user, RequirementVerification $requirementVerification)
    {
        return $this->isPermitted($user, $requirementVerification->project_id, 'DELETE', RequirementVerification::$resource_name); 
    }

    public function restore(User $user, RequirementVerification $requirementVerification)
    {
        return false; 
    }

    public function forceDelete(User $user, RequirementVerification $requirementVerification)
    {
        return false; 
    }
}
