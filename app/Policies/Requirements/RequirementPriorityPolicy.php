<?php

namespace App\Policies\Requirements;

use App\Models\User;
use App\Models\Requirement\RequirementPriority;
use Illuminate\Auth\Access\HandlesAuthorization;

use App\Policies\Traits\HandlePermission; 

class RequirementPriorityPolicy
{
    use HandlesAuthorization, 
        HandlePermission;
    
    public function viewAny(User $user)
    {
        $project_id = request()->project; 
        if(is_null($project_id)) return false; 

        return $this->isPermitted($user, $project_id, 'VIEW', RequirementPriority::$resource_name); 
    }

    public function view(User $user, RequirementPriority $requirementPriority)
    {
        return $this->isPermitted($user, $requirementPriority->project_id, 'VIEW', RequirementPriority::$resource_name); 
    }

    public function create(User $user)
    {
        $project_id = request()->project; 
        if(is_null($project_id)) return false; 

        return $this->isPermitted($user, $project_id, 'CREATE', RequirementPriority::$resource_name); 
    }

    public function update(User $user, RequirementPriority $requirementPriority)
    {
        return $this->isPermitted($user, $requirementPriority->project_id, 'UPDATE', RequirementPriority::$resource_name); 
    }

    public function delete(User $user, RequirementPriority $requirementPriority)
    {
        return $this->isPermitted($user, $requirementPriority->project_id, 'DELETE', RequirementPriority::$resource_name); 
    }

    public function restore(User $user, RequirementPriority $requirementPriority)
    {
        return false; 
    }

    public function forceDelete(User $user, RequirementPriority $requirementPriority)
    {
        return false; 
    }
}
