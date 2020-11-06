<?php

namespace App\Policies\Requirements;

use App\Models\User;
use App\Models\Requirement\RequirementCategory;
use Illuminate\Auth\Access\HandlesAuthorization;

use App\Policies\Traits\HandlePermission; 

class RequirementCategoryPolicy
{
    use HandlesAuthorization, 
        HandlePermission;
    
    public function viewAny(User $user)
    {
        $project_id = request()->project; 
        if(is_null($project_id)) return false; 

        return $this->isPermitted($user, $project_id, 'VIEW', RequirementCategory::$resource_name); 
    }

    public function view(User $user, RequirementCategory $requirementCategory)
    {
        return $this->isPermitted($user, $requirementCategory->project_id, 'VIEW', RequirementCategory::$resource_name); 
    }

    public function create(User $user)
    {
        $project_id = request()->project; 
        if(is_null($project_id)) return false; 

        return $this->isPermitted($user, $project_id, 'CREATE', RequirementCategory::$resource_name); 
    }

    public function update(User $user, RequirementCategory $requirementCategory)
    {
        return $this->isPermitted($user, $requirementCategory->project_id, 'UPDATE', RequirementCategory::$resource_name); 
    }

    public function delete(User $user, RequirementCategory $requirementCategory)
    {
        return $this->isPermitted($user, $requirementCategory->project_id, 'DELETE', RequirementCategory::$resource_name); 
    }

    public function restore(User $user, RequirementCategory $requirementCategory)
    {
        return false; 
    }

    public function forceDelete(User $user, RequirementCategory $requirementCategory)
    {
        return false; 
    }
}
