<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\ProjectCharters\ProjectCharterIndexResource; 
use App\Http\Controllers\Traits\HasProjectRequestKey; 
use App\Http\Controllers\Traits\Deletes\HandleDeleteProjectCharter; 

use App\Models\ProjectCharter\ProjectCharter; 
use App\Models\Queries\UserQuery; 


class ProjectCharterController extends Controller
{
	use HasProjectRequestKey, 
		HandleDeleteProjectCharter; 

	public function __construct() {
		$this->middleware(['auth:api']); 
		$this->authorizeResource(ProjectCharter::class); 
	}

	public function index(Request $request) {
		$this->authorize('viewAny', ProjectCharter::class); 

		$project_id = $request->get($this->getRequestKey());

		$projectCharter = ProjectCharter::where('project_id', $project_id)->first(); 

		$projectCharter->load([
			'project', 'posc', 'schedules', 
			'project.stakeholders', 'authority', 'approvals', 
			'project.stakeholders.user.projectRoles'
		]);

		return new ProjectCharterIndexResource($projectCharter); 
	}

	public function show(ProjectCharter $projectCharter) {
		$projectCharter->load([
			'project', 'posc', 'schedules', 
			'project.stakeholders', 'authority', 'approvals', 
			'project.stakeholders.user.projectRoles'
		]);

		return new ProjectCharterIndexResource($projectCharter); 
	}

	public function store(Request $request) {
		$projectCharter = ProjectCharter::make($request->only([
			'project_id', 'project_purpose', 'high_level_description', 
			'project_boundaries', 'key_deliverables', 'high_level_requirements', 
			'overall_project_risk', 'preapproved_financial_resources', 'project_exit_criteria'
		])); 

		$projectCharter->save();

		return new ProjectCharterIndexResource($projectCharter); 
	}

	public function update(Request $request, ProjectCharter $projectCharter) {
		$projectCharter->update($request->only([
			'project_purpose', 'high_level_description', 
			'project_boundaries', 'key_deliverables', 'high_level_requirements', 
			'overall_project_risk', 'preapproved_financial_resources', 'project_exit_criteria'
		]));

		return new ProjectCharterIndexResource($projectCharter); 
	}

	public function destroy(ProjectCharter $projectCharter) {
		$this->deleteProjectCharter($projectCharter); 
	}
}
