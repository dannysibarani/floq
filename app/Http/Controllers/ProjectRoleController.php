<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Traits\HasProjectRequestKey; 
use App\Http\Controllers\Traits\Deletes\HandleDeleteProjectRole; 

use App\Http\Resources\ProjectRoles\ProjectRoleIndexResource; 
use App\Http\Requests\ProjectRoles\ProjectRoleStoreRequest; 
use App\Http\Requests\ProjectRoles\ProjectRoleUpdateRequest; 

use App\Models\ProjectRole; 



class ProjectRoleController extends Controller
{
	use HasProjectRequestKey, 
		HandleDeleteProjectRole; 

	public function __construct() {
		$this->middleware(['auth:api']); 
		$this->authorizeResource(ProjectRole::class); 
	}

	public function index(Request $request) {
		$this->authorize('viewAny', ProjectRole::class); 

		$project_id = $request->get($this->getRequestKey()); 
		$projectRoles = ProjectRole::where('project_id', $project_id)->get();

		return ProjectRoleIndexResource::collection($projectRoles);  
	}

	public function store(ProjectRoleStoreRequest $request) {
		$projectRole = ProjectRole::create(
			$request->only([
				'project_id', 'name', 'description'
			])
		); 

		return new ProjectRoleIndexResource($projectRole); 
	}

	public function show(ProjectRole $projectRole) {
		return new ProjectRoleIndexResource($projectRole);  
	}

	public function update(ProjectRoleUpdateRequest $request, ProjectRole $projectRole) {
		$projectRole->update($request->only([
			'name', 'description'
		]));

		return new ProjectRoleIndexResource($projectRole); 
	}

	public function destroy(ProjectRole $projectRole) {
		$this->deleteProjectRole($projectRole); 
	}

}
