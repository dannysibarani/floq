<?php

namespace App\Policies;

use App\Models\User;
use App\Models\ProjectRole;
use Illuminate\Auth\Access\HandlesAuthorization;

use App\Models\Queries\UserQuery; 

use App\Policies\Traits\HandlePermission; 


class ProjectRolePolicy
{
    use HandlesAuthorization, HandlePermission;
    
    public function viewAny(User $user)
    {
        $project_id = request()->project; 
        if(is_null($project_id)) return false; 

        return $this->isPermitted($user, $project_id, 'VIEW', ProjectRole::$resource_name); 
    }

    public function view(User $user, ProjectRole $projectRole)
    {
        return $this->isPermitted($user, $projectRole->project_id, 'VIEW', ProjectRole::$resource_name); 
    }

    public function create(User $user)
    {
        $project_id = request()->project; 
        if(is_null($project_id)) return false; 
        
        return $this->isPermitted($user, $project_id, 'CREATE', ProjectRole::$resource_name); 
    }

    public function update(User $user, ProjectRole $projectRole)
    {
        return $this->isPermitted($user, $projectRole->project_id, 'UPDATE', ProjectRole::$resource_name); 
    }

    public function delete(User $user, ProjectRole $projectRole)
    {
        return $this->isPermitted($user, $projectRole->project_id, 'DELETE', ProjectRole::$resource_name); 
    }

    public function restore(User $user, ProjectRole $projectRole)
    {
        return false; 
    }

    public function forceDelete(User $user, ProjectRole $projectRole)
    {
        return false; 
    }
}
