<?php

namespace App\Policies;

use App\Models\User;
use App\Models\StakeholderEngAss;
use Illuminate\Auth\Access\HandlesAuthorization;

use App\Policies\Traits\HandlePermission; 

class StakeholderEngAssPolicy
{
    use HandlesAuthorization, 
        HandlePermission;
    
    public function viewAny(User $user)
    {
        $project_id = request()->project; 
        if(is_null($project_id)) return false; 

        return $this->isPermitted($user, $project_id, 'VIEW', StakeholderEngAss::$resource_name); 
    }

    public function view(User $user, StakeholderEngAss $stakeholderEngAss)
    {
        return $this->isPermitted($user, $stakeholderEngAss->project_id, 'VIEW', StakeholderEngAss::$resource_name); 
    }

    public function create(User $user)
    {
        $project_id = request()->project; 
        if(is_null($project_id)) return false; 

        return $this->isPermitted($user, $project_id, 'CREATE', StakeholderEngAss::$resource_name); 
    }

    public function update(User $user, StakeholderEngAss $stakeholderEngAss)
    {
        return $this->isPermitted($user, $stakeholderEngAss->project_id, 'UPDATE', StakeholderEngAss::$resource_name); 
    }

    public function delete(User $user, StakeholderEngAss $stakeholderEngAss)
    {
        return $this->isPermitted($user, $stakeholderEngAss->project_id, 'DELETE', StakeholderEngAss::$resource_name); 
    }

    public function restore(User $user, StakeholderEngAss $stakeholderEngAss)
    {
        return false; 
    }

    public function forceDelete(User $user, StakeholderEngAss $stakeholderEngAss)
    {
        return false; 
    }
}
