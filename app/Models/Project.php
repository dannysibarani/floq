<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


use App\Models\ProjectCharter\ProjectCharter;
use App\Models\StakeholderRegister; 
use App\Models\StakeholderAnalysis; 
use App\Models\ProjectRole;
use App\Models\Stakeholder; 

use App\Models\Requirement\Requirement; 
use App\Models\Requirement\RequirementVerification; 
use App\Models\Requirement\RequirementCategory; 
use App\Models\Requirement\RequirementPriority; 
use App\Models\Requirement\RequirementPhase; 
use App\Models\ProjectScopeStatement; 
use App\Models\RiskRegister; 
use App\Models\QualityMetric; 
use App\Models\StakeholderEngAss; 
use App\Models\ComManPlan; 



use App\Models\Traits\HasApprovals; 


class Project extends Model
{
    use SoftDeletes, HasApprovals;
    
    protected $dates = ['deleted_at'];

    public static $resource_name = 'PROJECT'; 

    protected $fillable = [
        'date_prepared', 'name', 'project_title', 'deleted_at'
    ];

	public function users() {
		return $this->belongsToMany(User::class, 'project_user', 'project_id', 'user_id')
				->using('App\Models\Stakeholder')
				->withTimestamps(); 
	}

	public function charter() {
		return $this->hasOne(ProjectCharter::class, 'project_id', 'id'); 
	}

	public function projectRoles() {
		return $this->hasMany(ProjectRole::class, 'project_id', 'id'); 
	}

    public function stakeholderRegisters() {
        return $this->hasMany(StakeholderRegister::class, 'project_id', 'id');
    }

    public function stakeholderAnalyses() {
        return $this->hasMany(StakeholderAnalysis::class, 'project_id', 'id');
    }

    public function stakeholders() {
    	return $this->hasMany(Stakeholder::class, 'project_id', 'id'); 
    }

    public function requirements() {
        return $this->hasMany(Requirement::class, 'project_id', 'id'); 
    }

    public function scope() {
        return $this->hasOne(ProjectScopeStatement::class, 'project_id', 'id'); 
    }

    public function riskRegisters() {
        return $this->hasMany(RiskRegister::class, 'project_id', 'id'); 
    }

    public function qualityMetrics() {
        return $this->hasMany(QualityMetric::class, 'project_id', 'id'); 
    }

    public function stakeholderEngAsses() {
        return $this->hasMany(StakeholderEngAss::class, 'project_id', 'id'); 
    }

    public function comManPlans() {
        return $this->hasMany(ComManPlan::class, 'project_id', 'id'); 
    }

    public function requirementVerifications() {
        return $this->hasMany(RequirementVerification::class, 'project_id', 'id'); 
    }

    public function requirementCategories() {
        return $this->hasMany(RequirementCategory::class, 'project_id', 'id'); 
    }

    public function requirementPriorities() {
        return $this->hasMany(RequirementPriority::class, 'project_id', 'id'); 
    }

    public function requirementPhases() {
        return $this->hasMany(RequirementPhase::class, 'project_id', 'id'); 
    }
}
