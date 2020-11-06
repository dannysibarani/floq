<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Stakeholder;
use Illuminate\Auth\Access\HandlesAuthorization;

use App\Models\Queries\UserQuery; 
use App\Models\Project; 

use App\Policies\Traits\HandlePermission; 


class StakeholderPolicy
{
    use HandlesAuthorization, 
        HandlePermission;
    
    public function viewAny(User $user)
    {
        $project_id = request()->project; 
        if(is_null($project_id)) return false; 

        return $this->isPermitted($user, $project_id, 'VIEW', Stakeholder::$resource_name); 
    }

    public function view(User $user, Stakeholder $stakeholder)
    {
        if(!$this->isPermitted($user, $stakeholder->project_id, 'VIEW', Stakeholder::$resource_name)) return false;

        $userQuery = new UserQuery($user); 
        $stakeholderQuery = new UserQuery($stakeholder->user()->first());
        if($userQuery->corporation()->name != $stakeholderQuery->corporation()->name) return false; 

        return true; 
    }

public function create(User $user)
    {
        $project_id = request()->project_id; 
        if(is_null($project_id)) return false; 

        $user_id = request()->user_id; 
        if(is_null($user_id)) return false; 

        $project_role_id = request()->project_role_id; 
        if(is_null($project_role_id)) return false; 

        if($user_id == $user->id) return false; //User can't create his own role

        if(!$this->isPermitted($user, $project_id, 'CREATE', Stakeholder::$resource_name)) return false;

        $userQuery = new UserQuery($user); 
        $stakeholderQuery = new UserQuery(User::find($user_id)->first());
        if($userQuery->corporation()->name != $stakeholderQuery->corporation()->name) return false; 

        return true; 
    }

    /*public function create(User $user)
    {
        $user_id = request()->user_id; 
        $project_id = request()->project_id; 
        $project_role_id = request()->project_role_id; 

        $userQuery = new UserQuery($user); 
        if(!$userQuery->hasAdministrator()) return false; 

        if($user->id == $user_id) return false; //Admin can't create his own role

        if(!$userQuery->hasProject($project_id)) return false; 

        $stakeholderQuery = new UserQuery(User::find($user_id)->first());
        if($userQuery->corporation()->name != $stakeholderQuery->corporation()->name) return false; 

        return true; 
    }*/

    public function update(User $user, Stakeholder $stakeholder)
    {
        if($stakeholder->user_id == $user->id) return false; //User can't create his own role

        if(!$this->isPermitted($user, $stakeholder->project_id, 'UPDATE', Stakeholder::$resource_name)) return false;

        $userQuery = new UserQuery($user); 
        $stakeholderQuery = new UserQuery(User::find($stakeholder->user_id)->first());
        if($userQuery->corporation()->name != $stakeholderQuery->corporation()->name) return false; 

        return true; 
    }

    public function delete(User $user, Stakeholder $stakeholder)
    {
        if($stakeholder->user_id == $user->id) return false; //User can't create his own role

        if(!$this->isPermitted($user, $stakeholder->project_id, 'DELETE', Stakeholder::$resource_name)) return false;

        $userQuery = new UserQuery($user); 
        $stakeholderQuery = new UserQuery(User::find($stakeholder->user_id)->first());
        if($userQuery->corporation()->name != $stakeholderQuery->corporation()->name) return false; 

        return true; 
    }

    public function restore(User $user, Stakeholder $stakeholder)
    {
        return false; 
    }

    public function forceDelete(User $user, Stakeholder $stakeholder)
    {
        return false; 
    }
}
