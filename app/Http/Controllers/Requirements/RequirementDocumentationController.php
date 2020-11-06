<?php

namespace App\Http\Controllers\Requirements;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Controllers\Traits\HasProjectRequestKey; 

use App\Http\Resources\Projects\ProjectRequirementResouce; 
use App\Http\Resources\Requirements\RequirementIndexResource; 
use App\Http\Resources\Requirements\RequirementResource; 

use App\Models\Requirement\Requirement; 
use App\Models\Project; 


class RequirementDocumentationController extends Controller
{
	use HasProjectRequestKey; 

	public function __construct() {
		$this->middleware(['auth:api']); 
		$this->authorizeResource(Requirement::class); 
	}

	public function index(Request $request) {
		$this->authorize('viewAny', Requirement::class); 

		$project_id = $request->get($this->getRequestKey());

		$project = Project::find($project_id); 

		$project->load([
			'requirements.category', 
			'requirements.priority', 
			'requirements.verifications',
			'requirements.phase', 
			'requirements.project', 
			'requirements.user', 
			'requirements.projectRole'
		]);	

		return new ProjectRequirementResouce($project);
	}

	public function show(Requirement $requirement) {
		$requirement->load([
			'category', 
			'priority', 
			'verifications',
			'phase', 
			'project', 
			'user', 
			'projectRole'
		]);

		return new RequirementIndexResource($requirement);
	}

	public function update(Request $request, Requirement $requirement) {
		$requirement->update($request->only([
			'user_id', 
			'project_role_id', 
			'sid', 
			'requirements', 
			'requirement_category_id', 
			'requirement_priority_id', 
			'requirement_phase_id', 
			'acceptance_criteria', 
		]));

		$requirement->verifications()->detach(); 
		$requirement->verifications()->attach($request->verifications); 

		return new RequirementIndexResource($requirement); 
	}

	public function store(Request $request) {
		$requirement = Requirement::make($request->only([
			'project_id',
			'user_id', 
			'project_role_id', 
			'sid', 
			'requirements', 
			'requirement_category_id', 
			'requirement_priority_id', 
			'requirement_phase_id', 
			'acceptance_criteria', 
		])); 

		$requirement->save(); 

		$requirement->verifications()->attach($request->verifications); 

		return new RequirementIndexResource($requirement); 
	}

	public function destroy(Requirement $requirement) {
		$requirement->verifications()->detach(); 
		$requirement->delete(); 
	}
}
