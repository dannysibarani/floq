<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\Projects\ProjectIndexResource; 
use App\Http\Resources\Projects\ProjectShowResource; 

use App\Http\Requests\Projects\ProjectStoreRequest; 
use App\Http\Requests\Projects\ProjectUpdateRequest; 

use App\Models\Project; 
use App\Models\Queries\UserQuery; 


use App\Http\Controllers\Traits\Deletes\HandleDeleteProject; 


class ProjectController extends Controller
{
	use HandleDeleteProject; 

	public function __construct() {
		$this->middleware(['auth:api']); 
		$this->authorizeResource(Project::class); 
	}

	public function index(Request $request) {
		$this->authorize('viewAny', Project::class); 

		$userQuery = new UserQuery($request->user()); 
		if($userQuery->hasSuperAdministrator()) {
			$projects = Project::get(); 
		}
		else $projects = $request->user()->projects()->get();

		return ProjectIndexResource::collection($projects);
	}

	public function show(Project $project) {
		return new ProjectIndexResource($project);
	}

	public function store(ProjectStoreRequest $request) {
		$project = Project::make($request->only([
			'date_prepared', 'name', 'project_title'
		])); 

		$userQuery = new UserQuery($request->user()); 
		if($userQuery->hasSuperAdministrator()) {
			$project->save(); 
		}
		else $request->user()->projects()->save($project);

		return new ProjectIndexResource($project); 
	}

	public function update(ProjectUpdateRequest $request, Project $project) {
		$project->update($request->only([
			'name', 'project_title'
		]));

		return new ProjectIndexResource($project); 
	}

	public function destroy(Project $project) {
		$this->deleteProject($project); 
	}
}