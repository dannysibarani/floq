<?php

namespace App\Policies;

use App\Models\User;
use App\Models\ProjectScopeStatement;
use Illuminate\Auth\Access\HandlesAuthorization;

use App\Policies\Traits\HandlePermission; 


class ProjectScopeStatementPolicy
{
    use HandlesAuthorization, 
        HandlePermission;
    
    public function viewAny(User $user)
    {
        $project_id = request()->project; 
        if(is_null($project_id)) return false; 

        return $this->isPermitted($user, $project_id, 'VIEW', ProjectScopeStatement::$resource_name); 
    }

    public function view(User $user, ProjectScopeStatement $projectScopeStatement)
    {
        return $this->isPermitted($user, $projectScopeStatement->project_id, 'VIEW', ProjectScopeStatement::$resource_name); 
    }

    public function create(User $user)
    {
        $project_id = request()->project; 
        if(is_null($project_id)) return false; 

        return $this->isPermitted($user, $project_id, 'CREATE', ProjectScopeStatement::$resource_name); 
    }

    public function update(User $user, ProjectScopeStatement $projectScopeStatement)
    {
        return $this->isPermitted($user, $projectScopeStatement->project_id, 'UPDATE', ProjectScopeStatement::$resource_name); 
    }

    public function delete(User $user, ProjectScopeStatement $projectScopeStatement)
    {
        return $this->isPermitted($user, $projectScopeStatement->project_id, 'DELETE', ProjectScopeStatement::$resource_name); 
    }

    public function restore(User $user, ProjectScopeStatement $projectScopeStatement)
    {
        return false; 
    }

    public function forceDelete(User $user, ProjectScopeStatement $projectScopeStatement)
    {
        return false; 
    }
}
