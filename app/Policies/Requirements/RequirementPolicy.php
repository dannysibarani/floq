<?php

namespace App\Policies\Requirements;

use App\Models\User;
use App\Models\Requirement\Requirement;
use Illuminate\Auth\Access\HandlesAuthorization;

use App\Policies\Traits\HandlePermission; 


class RequirementPolicy
{
    use HandlesAuthorization, 
        HandlePermission;
    
    public function viewAny(User $user)
    {
        $project_id = request()->project; 
        if(is_null($project_id)) return false; 

        return $this->isPermitted($user, $project_id, 'VIEW', Requirement::$resource_name); 
    }

    public function view(User $user, Requirement $requirement)
    {
        return $this->isPermitted($user, $requirement->project_id, 'VIEW', Requirement::$resource_name); 
    }

    public function create(User $user)
    {
        $project_id = request()->project; 
        if(is_null($project_id)) return false; 

        return $this->isPermitted($user, $project_id, 'CREATE', Requirement::$resource_name); 
    }

    public function update(User $user, Requirement $requirement)
    {
        return $this->isPermitted($user, $requirement->project_id, 'UPDATE', Requirement::$resource_name); 
    }

    public function delete(User $user, Requirement $requirement)
    {
        return $this->isPermitted($user, $requirement->project_id, 'DELETE', Requirement::$resource_name); 
    }

    public function restore(User $user, Requirement $requirement)
    {
        return false; 
    }

    public function forceDelete(User $user, Requirement $requirement)
    {
        return false; 
    }
}
