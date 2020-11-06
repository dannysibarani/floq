<?php

namespace App\Policies;

use App\Models\User;
use App\Models\StakeholderRegister;
use Illuminate\Auth\Access\HandlesAuthorization;

use App\Policies\Traits\HandlePermission; 



class StakeholderRegisterPolicy
{
    use HandlesAuthorization, 
        HandlePermission;
    
    public function viewAny(User $user)
    {
        $project_id = request()->project; 
        if(is_null($project_id)) return false; 

        return $this->isPermitted($user, $project_id, 'VIEW', StakeholderRegister::$resource_name); 
    }

    public function view(User $user, StakeholderRegister $stakeholderRegister)
    {
        return $this->isPermitted($user, $stakeholderRegister->project_id, 'VIEW', StakeholderRegister::$resource_name);
    }

    public function create(User $user)
    {
        $project_id = request()->project_id; 
        if(is_null($project_id)) return false; 

        return $this->isPermitted($user, $project_id, 'CREATE', StakeholderRegister::$resource_name);
    }

    public function update(User $user, StakeholderRegister $stakeholderRegister)
    {
        return $this->isPermitted($user, $stakeholderRegister->project_id, 'UPDATE', StakeholderRegister::$resource_name);
    }

    public function delete(User $user, StakeholderRegister $stakeholderRegister)
    {
        return $this->isPermitted($user, $stakeholderRegister->project_id, 'DELETE', StakeholderRegister::$resource_name);
    }

    public function restore(User $user, StakeholderRegister $stakeholderRegister)
    {
        return false; 
    }

    public function forceDelete(User $user, StakeholderRegister $stakeholderRegister)
    {
        return false; 
    }
}
