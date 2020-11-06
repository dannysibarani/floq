<?php

namespace App\Policies;

use App\Models\User;
use App\Models\StakeholderAnalysis;
use Illuminate\Auth\Access\HandlesAuthorization;

use App\Policies\Traits\HandlePermission; 


class StakeholderAnalysisPolicy
{
    use HandlesAuthorization, 
        HandlePermission;
    
    public function viewAny(User $user)
    {
        $project_id = request()->project; 
        if(is_null($project_id)) return false; 

        return $this->isPermitted($user, $project_id, 'VIEW', StakeholderAnalysis::$resource_name); 
    }

    public function view(User $user, StakeholderAnalysis $stakeholderAnalysis)
    {
        return $this->isPermitted($user, $stakeholderAnalysis->project_id, 'VIEW', StakeholderAnalysis::$resource_name);
    }

    public function create(User $user)
    {
        $project_id = request()->project_id; 
        if(is_null($project_id)) return false; 

        return $this->isPermitted($user, $project_id, 'CREATE', StakeholderAnalysis::$resource_name);
    }

    public function update(User $user, StakeholderAnalysis $stakeholderAnalysis)
    {
        return $this->isPermitted($user, $stakeholderAnalysis->project_id, 'UPDATE', StakeholderAnalysis::$resource_name);
    }

    public function delete(User $user, StakeholderAnalysis $stakeholderAnalysis)
    {
        return $this->isPermitted($user, $stakeholderAnalysis->project_id, 'DELETE', StakeholderAnalysis::$resource_name);
    }

    public function restore(User $user, StakeholderAnalysis $stakeholderAnalysis)
    {
        return false; 
    }

    public function forceDelete(User $user, StakeholderAnalysis $stakeholderAnalysis)
    {
        return false; 
    }
}
