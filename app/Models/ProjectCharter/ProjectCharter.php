<?php

namespace App\Models\ProjectCharter;

use Illuminate\Database\Eloquent\Model;

use App\Models\Project; 
use App\Models\ProjectCharter\ProjectCharterPosc; 
use App\Models\ProjectCharter\ProjectCharterAuthority; 
use App\Models\ProjectCharter\ProjectCharterSchedule; 

use App\Models\Traits\HasApprovals; 

class ProjectCharter extends Model
{
	use HasApprovals; 

	public static $resource_name = 'PROJECT_CHARTER'; 

	protected $fillable = [
			'project_id', 'project_purpose', 'high_level_description', 
			'project_boundaries', 'key_deliverables', 'high_level_requirements', 
			'overall_project_risk', 'preapproved_financial_resources', 'project_exit_criteria'
	]; 

	public function project() {
		return $this->belongsTo(Project::class, 'project_id', 'id'); 
	}

	public function posc() {
		return $this->hasOne(ProjectCharterPosc::class, 'project_charter_id', 'id'); 
	}

	public function authority() {
		return $this->hasOne(ProjectCharterAuthority::class, 'project_charter_id', 'id');
	}

	public function schedules() {
		return $this->hasMany(ProjectCharterSchedule::class, 'project_charter_id', 'id'); 
	}
}
