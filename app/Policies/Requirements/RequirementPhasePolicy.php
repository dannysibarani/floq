<?php

namespace App\Policies\Requirements;

use App\Models\User;
use App\Models\Requirement\RequirementPhase;
use Illuminate\Auth\Access\HandlesAuthorization;

use App\Policies\Traits\HandlePermission; 

class RequirementPhasePolicy
{
    use HandlesAuthorization, 
        HandlePermission;
    
    public function viewAny(User $user)
    {
        $project_id = request()->project; 
        if(is_null($project_id)) return false; 

        return $this->isPermitted($user, $project_id, 'VIEW', RequirementPhase::$resource_name); 
    }

    public function view(User $user, RequirementPhase $requirementPhase)
    {
        return $this->isPermitted($user, $requirementPhase->project_id, 'VIEW', RequirementPhase::$resource_name); 
    }

    public function create(User $user)
    {
        $project_id = request()->project; 
        if(is_null($project_id)) return false; 

        return $this->isPermitted($user, $project_id, 'CREATE', RequirementPhase::$resource_name); 
    }

    public function update(User $user, RequirementPhase $requirementPhase)
    {
        return $this->isPermitted($user, $requirementPhase->project_id, 'UPDATE', RequirementPhase::$resource_name); 
    }

    public function delete(User $user, RequirementPhase $requirementPhase)
    {
        return $this->isPermitted($user, $requirementPhase->project_id, 'DELETE', RequirementPhase::$resource_name); 
    }

    public function restore(User $user, RequirementPhase $requirementPhase)
    {
        return false; 
    }

    public function forceDelete(User $user, RequirementPhase $requirementPhase)
    {
        return false; 
    }
}
