<?php

namespace App\Policies;

use App\Models\User;
use App\Models\ComManPlan;
use Illuminate\Auth\Access\HandlesAuthorization;

use App\Policies\Traits\HandlePermission;

class ComManPlanPolicy
{
    use HandlesAuthorization, 
        HandlePermission;
    
    public function viewAny(User $user)
    {
        $project_id = request()->project; 
        if(is_null($project_id)) return false; 

        return $this->isPermitted($user, $project_id, 'VIEW', ComManPlan::$resource_name); 
    }

    public function view(User $user, ComManPlan $comManPlan)
    {
        return $this->isPermitted($user, $comManPlan->project_id, 'VIEW', ComManPlan::$resource_name); 
    }

    public function create(User $user)
    {
        $project_id = request()->project; 
        if(is_null($project_id)) return false; 

        return $this->isPermitted($user, $project_id, 'CREATE', ComManPlan::$resource_name); 
    }

    public function update(User $user, ComManPlan $comManPlan)
    {
        return $this->isPermitted($user, $comManPlan->project_id, 'UPDATE', ComManPlan::$resource_name); 
    }

    public function delete(User $user, ComManPlan $comManPlan)
    {
        return $this->isPermitted($user, $comManPlan->project_id, 'DELETE', ComManPlan::$resource_name); 
    }

    public function restore(User $user, ComManPlan $comManPlan)
    {
        return false; 
    }

    public function forceDelete(User $user, ComManPlan $comManPlan)
    {
        return false; 
    }
}
