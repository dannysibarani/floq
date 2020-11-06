<?php

namespace App\Policies\ProjectCharters;

use App\Models\User;
use App\Models\ProjectCharter\ProjectCharter;
use Illuminate\Auth\Access\HandlesAuthorization;

use App\Policies\Traits\HandlePermission; 


class ProjectCharterPolicy
{
    use HandlesAuthorization, HandlePermission;
    
    public function viewAny(User $user)
    {
        $project_id = request()->project; 
        if(is_null($project_id)) return false; 

        return $this->isPermitted($user, $project_id, 'VIEW', ProjectCharter::$resource_name); 
    }

    public function view(User $user, ProjectCharter $projectCharter)
    {
        return $this->isPermitted($user, $projectCharter->project_id, 'VIEW', ProjectCharter::$resource_name); 
    }

    public function create(User $user)
    {
        $project_id = request()->project; 
        if(is_null($project_id)) return false; 

        return $this->isPermitted($user, $project_id, 'CREATE', ProjectCharter::$resource_name); 
    }

    public function update(User $user, ProjectCharter $projectCharter)
    {
        return $this->isPermitted($user, $projectCharter->project_id, 'UPDATE', ProjectCharter::$resource_name); 
    }

    public function delete(User $user, ProjectCharter $projectCharter)
    {
        return $this->isPermitted($user, $projectCharter->project_id, 'DELETE', ProjectCharter::$resource_name); 
    }

    public function restore(User $user, ProjectCharter $projectCharter)
    {
        return false; 
    }

    public function forceDelete(User $user, ProjectCharter $projectCharter)
    {
        return false; 
    }
}
