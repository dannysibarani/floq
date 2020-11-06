<?php

namespace App\Policies;

use App\Models\User;
use App\Models\QualityMetric;
use Illuminate\Auth\Access\HandlesAuthorization;

use App\Policies\Traits\HandlePermission; 


class QualityMetricPolicy
{
    use HandlesAuthorization, 
        HandlePermission;
    
    public function viewAny(User $user)
    {
        $project_id = request()->project; 
        if(is_null($project_id)) return false; 

        return $this->isPermitted($user, $project_id, 'VIEW', QualityMetric::$resource_name); 
    }

    public function view(User $user, QualityMetric $qualityMetric)
    {
        return $this->isPermitted($user, $qualityMetric->project_id, 'VIEW', QualityMetric::$resource_name); 
    }

    public function create(User $user)
    {
        $project_id = request()->project; 
        if(is_null($project_id)) return false; 

        return $this->isPermitted($user, $project_id, 'CREATE', QualityMetric::$resource_name); 
    }

    public function update(User $user, QualityMetric $qualityMetric)
    {
        return $this->isPermitted($user, $qualityMetric->project_id, 'UPDATE', QualityMetric::$resource_name); 
    }

    public function delete(User $user, QualityMetric $qualityMetric)
    {
        return $this->isPermitted($user, $qualityMetric->project_id, 'DELETE', QualityMetric::$resource_name); 
    }

    public function restore(User $user, QualityMetric $qualityMetric)
    {
        return false; 
    }

    public function forceDelete(User $user, QualityMetric $qualityMetric)
    {
        return false; 
    }
}
