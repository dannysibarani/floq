<?php

namespace App\Policies;

use App\Models\User;
use App\Models\RiskRegister;
use Illuminate\Auth\Access\HandlesAuthorization;

use App\Policies\Traits\HandlePermission; 

class RiskRegisterPolicy
{
    use HandlesAuthorization, 
        HandlePermission;
    
    public function viewAny(User $user)
    {
        $project_id = request()->project; 
        if(is_null($project_id)) return false; 

        return $this->isPermitted($user, $project_id, 'VIEW', RiskRegister::$resource_name); 
    }

    public function view(User $user, RiskRegister $riskRegister)
    {
        return $this->isPermitted($user, $riskRegister->project_id, 'VIEW', RiskRegister::$resource_name); 
    }

    public function create(User $user)
    {
        $project_id = request()->project; 
        if(is_null($project_id)) return false; 

        return $this->isPermitted($user, $project_id, 'CREATE', RiskRegister::$resource_name); 
    }

    public function update(User $user, RiskRegister $riskRegister)
    {
        return $this->isPermitted($user, $riskRegister->project_id, 'UPDATE', RiskRegister::$resource_name); 
    }

    public function delete(User $user, RiskRegister $riskRegister)
    {
        return $this->isPermitted($user, $riskRegister->project_id, 'DELETE', RiskRegister::$resource_name); 
    }

    public function restore(User $user, RiskRegister $riskRegister)
    {
        return false; 
    }

    public function forceDelete(User $user, RiskRegister $riskRegister)
    {
        return false; 
    }
}
