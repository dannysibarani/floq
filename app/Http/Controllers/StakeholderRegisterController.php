<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Resources\Projects\ProjectStakeholderRegisterResource; 

use App\Http\Controllers\Traits\HasProjectRequestKey; 
use App\Http\Controllers\Traits\Deletes\HandleDeleteStakeholderRegister;

use App\Models\Project; 
use App\Models\StakeholderRegister; 


class StakeholderRegisterController extends Controller
{
	use HasProjectRequestKey, 
		HandleDeleteStakeholderRegister; 

	public function __construct() {
		$this->middleware(['auth:api']); 
		$this->authorizeResource(StakeholderRegister::class); 
	}

	public function index(Request $request) {
		$this->authorize('viewAny', StakeholderRegister::class);

		$project_id = $request->get($this->getRequestKey()); 
		$project = Project::find($project_id); 

		$project->load([
			'stakeholderRegisters', 
			'stakeholderRegisters.user', 
			'stakeholderRegisters.user.contacts', 
			'stakeholderRegisters.projectRole',
		]); 

		return new ProjectStakeholderRegisterResource($project); 
	}

	public function show(StakeholderRegister $stakeholderRegister) {
		$project = $stakeholderRegister->project; 

		$project->load([
			'stakeholderRegisters', 
			'stakeholderRegisters.user', 
			'stakeholderRegisters.user.contacts', 
			'stakeholderRegisters.projectRole',
		]); 

		return new ProjectStakeholderRegisterResource($project); 
	}

	public function store(Request $request) {
		$stakeholderRegister = StakeholderRegister::make(
			$request->only([
				'project_id', 'user_id', 'project_role_id', 
				'requirements', 'expectation', 'classification'
			])
		); 

		$stakeholderRegister->save(); 

		$project = $stakeholderRegister->project; 

		$project->load([
			'stakeholderRegisters', 
			'stakeholderRegisters.user', 
			'stakeholderRegisters.user.contacts', 
			'stakeholderRegisters.projectRole',
		]); 

		return new ProjectStakeholderRegisterResource($project);  
	}

	public function update(Request $request, StakeholderRegister $stakeholderRegister) {
		$stakeholderRegister->update(
			$request->only([
				'project_role_id', 
				'requirements', 'expectation', 'classification'
			])
		); 

		$project = $stakeholderRegister->project; 

		$project->load([
			'stakeholderRegisters', 
			'stakeholderRegisters.user', 
			'stakeholderRegisters.user.contacts', 
			'stakeholderRegisters.projectRole',
		]); 

		return new ProjectStakeholderRegisterResource($project);  

	}

	public function destroy(StakeholderRegister $stakeholderRegister) {
		$this->deleteStakeholderRegister($stakeholderRegister); 
	}

}

