<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Project; 


class ProjectScopeStatement extends Model
{
	public static $resource_name = 'PROJECT_SCOPE_STATEMENT';

	protected $fillable = [
		'project_id', 'project_scope_defenition', 'project_deliverables', 'product_acceptance_criteria', 'project_exclusion', 'project_constrains', 'project_assumptions'
	]; 

	public function project() {
		return $this->belongsTo(Project::class, 'project_id', 'id'); 
	}
}
