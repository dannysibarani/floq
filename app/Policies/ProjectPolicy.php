<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Project;
use Illuminate\Auth\Access\HandlesAuthorization;

use App\Models\Queries\UserQuery; 
use App\Policies\Traits\HandlePermission; 


class ProjectPolicy
{
    use HandlesAuthorization, HandlePermission;
    
    public function viewAny(User $user)
    {
        return true; 
    }

    public function view(User $user, Project $project)
    {
        return $this->isPermitted($user, $project->id, 'VIEW', Project::$resource_name); 
    }

    public function create(User $user)
    {
        $userQuery = new UserQuery($user); 
        if($userQuery->hasSuperAdministrator()) return true; 

        if(!$userQuery->hasAdministrator()) return false; 

        return true; 
    }

    public function update(User $user, Project $project)
    {
        return $this->isPermitted($user, $project->id, 'UPDATE', Project::$resource_name); 
    }

    public function delete(User $user, Project $project)
    {
        return $this->isPermitted($user, $project->id, 'DELETE', Project::$resource_name); 
    }

    public function restore(User $user, Project $project)
    {
        return false; 
    }
    
    public function forceDelete(User $user, Project $project)
    {
        return false; 
    }
}
