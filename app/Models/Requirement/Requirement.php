<?php

namespace App\Models\Requirement;

use Illuminate\Database\Eloquent\Model;

use App\Models\Requirement\RequirementVerification; 
use App\Models\Requirement\RequirementCategory; 
use App\Models\Requirement\RequirementPriority; 
use App\Models\Requirement\RequirementPhase; 

use App\Models\Project; 
use App\Models\User; 
use App\Models\ProjectRole; 



class Requirement extends Model
{
	public static $resource_name = 'REQUIREMENT'; 
	
    protected $fillable = [
    	'project_id', 
		'user_id', 
		'project_role_id', 
		'sid', 
		'requirements', 
		'requirement_category_id', 
		'requirement_priority_id', 
		'requirement_phase_id', 
		'acceptance_criteria', 
		'business_objective', 
		'deliverable'
    ];


	public function verifications() {
		return $this->belongsToMany(RequirementVerification::class, 'req_req_verification', 'requirement_id', 'requirement_verification_id')
				->withTimestamps(); 
	}

	public function category() {
		return $this->belongsTo(RequirementCategory::class, 'requirement_category_id', 'id');
	}

	public function priority() {
		return $this->belongsTo(RequirementPriority::class, 'requirement_priority_id', 'id');
	}

	public function phase() {
		return $this->belongsTo(RequirementPhase::class, 'requirement_phase_id', 'id');
	}

	public function project() {
		return $this->belongsTo(Project::class, 'project_id', 'id');
	}

	public function user() {
		return $this->belongsTo(User::class, 'user_id', 'id');
	}

	public function projectRole() {
		return $this->belongsTo(ProjectRole::class, 'project_role_id', 'id');
	}
}