<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Approval;
use Illuminate\Auth\Access\HandlesAuthorization;

use App\Policies\Traits\HandlePermission; 

use App\Models\Resource; 


class ApprovalPolicy
{
    use HandlesAuthorization, HandlePermission;
    
    public function viewAny(User $user)
    {
        $project_id = request()->project; 
        if(is_null($project_id)) return false; 

        $resource_id = request()->resource; 
        if(is_null($resource_id)) return false; 

        return $this->isPermitted($user, $project_id, 'APPROVE', Resource::find($resource_id)->name); 
    }

    public function view(User $user, Approval $approval)
    {
        return $this->isPermitted($user, $approval->project_id, 'APPROVE', Resource::find($approval->resource_id)->name); 
    }

    public function create(User $user) {
        return false; 
    }

    public function update(User $user, Approval $approval)
    {
        return $this->isPermitted($user, $approval->project_id, 'APPROVE', Resource::find($approval->resource_id)->name); 
    }

    public function delete(User $user, Approval $approval)
    {
        return $this->isPermitted($user, $approval->project_id, 'APPROVE', Resource::find($approval->resource_id)->name); 
    }

    public function restore(User $user, Approval $approval)
    {
        return false; 
    }

    public function forceDelete(User $user, Approval $approval)
    {
        return false; 
    }
}
