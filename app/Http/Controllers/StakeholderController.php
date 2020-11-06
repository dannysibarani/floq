<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Traits\HasProjectRequestKey; 

use App\Http\Resources\Stakeholders\StakeholderProjectRoleResource; 

use App\Http\Requests\Stakeholders\StakeholderStoreRequest; 
use App\Http\Requests\Stakeholders\StakeholderUpdateRequest; 


use App\Models\Stakeholder; 
use App\Models\User; 
use App\Models\ProjectRole; 
use App\Models\Project; 


class StakeholderController extends Controller
{
	use HasProjectRequestKey; 

	public function __construct() {
		$this->middleware(['auth:api']); 
		//$this->authorizeResource(Stakeholder::class); 
	}

	public function index(Request $request) {
		$this->authorize('viewAny', Stakeholder::class);

		$project_id = $request->get($this->getRequestKey()); 
		$project = Project::find($project_id); 

		$stakeholders = Stakeholder::where('project_id', $project_id)
							->whereHas('user.roles', function($query) {
								return $query->where('name', '<>', 'ADMINISTRATOR'); 
							})->get(); 

		$stakeholders->load([
			'user.profile', 
			'user.contacts', 
			'user.roles', 
			'user.projectRoles', 
		]); 

		return StakeholderProjectRoleResource::collection($stakeholders); 
	}

	public function store(StakeholderStoreRequest $request) {
		$stakeholder = Stakeholder::make(
			$request->only([
				'user_id', 'project_id'
			])
		); 

		$this->authorize('view', $stakeholder); 

		$projectRole = ProjectRole::find(
			$request->project_role_id
		); 

		$user = User::find($stakeholder->user_id); 
		$user->projects()->syncWithoutDetaching(
			Project::find($stakeholder->project_id)
		);

		$pRoles = $user->projectRoles()->where('project_id', $stakeholder->project_id)->get(); 
		$user->projectRoles()->detach($pRoles); 
		$user->projectRoles()->attach(
			$projectRole
		); 

		/*$stakeholder->load([
			'user.profile', 
			'user.contacts', 
			'user.roles', 
			'user.projectRoles', 
		]);*/

		return new StakeholderProjectRoleResource($stakeholder); 
	}

	public function show(Request $request, User $user) {
		$project_id = $request->get($this->getRequestKey()); 
		$stakeholder = Stakeholder::where('project_id', $project_id)
							->where('user_id', $user->id)
							->first(); 

		$this->authorize('view', $stakeholder); 

		$stakeholder->load([
			'user.profile', 
			'user.contacts', 
			'user.roles', 
			'user.projectRoles', 
		]); 

		return new StakeholderProjectRoleResource($stakeholder); 
	} 

	public function update(StakeholderUpdateRequest $request, User $user) {
		$project_id = $request->get($this->getRequestKey()); 
		$stakeholder = Stakeholder::where('project_id', $project_id)
							->where('user_id', $user->id)
							->first(); 

		$this->authorize('update', $stakeholder);

		$projectRole = ProjectRole::find(
			$request->project_role_id
		);

		$user = User::find($user->id); 
		$user->projects()->syncWithoutDetaching(
			Project::find($project_id)
		);

		$pRoles = $stakeholder->user->projectRoles()->where('project_id', $project_id)->get(); 
		$stakeholder->user->projectRoles()->detach($pRoles); 
		$stakeholder->user->projectRoles()->attach(
			$projectRole 
		); 

		/*$stakeholder->load([
			'user.profile', 
			'user.contacts', 
			'user.roles', 
			'user.projectRoles', 
		]);*/

		return new StakeholderProjectRoleResource($stakeholder); 
	}

	public function destroy(Request $request, User $user) {
		$project_id = $request->get($this->getRequestKey()); 
		$stakeholder = Stakeholder::where('project_id', $project_id)
							->where('user_id', $user->id)
							->first(); 

		$this->authorize('delete', $stakeholder);

		$user->projects()->detach($project_id); 
		
		$pRoles = $user->projectRoles()->where('project_id', $project_id)->get(); 
		$user->projectRoles()->detach($pRoles); 
	}

}