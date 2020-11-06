<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\Projects\ProjectStakeholderAnalysisResource; 

use App\Http\Controllers\Traits\HasProjectRequestKey; 

use App\Models\Project; 
use App\Models\StakeholderAnalysis; 


class StakeholderAnalysisController extends Controller
{
	use HasProjectRequestKey; 

	public function __construct() {
		$this->middleware(['auth:api']); 
		$this->authorizeResource(StakeholderAnalysis::class); 
	}

	public function index(Request $request) {
		$this->authorize('viewAny', StakeholderAnalysis::class); 

		$project_id = $request->get($this->getRequestKey()); 
		$project = Project::find($project_id); 
		
		$project->load([
			'stakeholderAnalyses', 
			'stakeholderAnalyses.user', 
			'stakeholderAnalyses.projectRole',
		]); 

		return new ProjectStakeholderAnalysisResource($project); 
	}

	public function show(StakeholderAnalysis $stakeholderAnalysis) {
		$project = Project::find($stakeholderAnalysis->project_id); 

		$project->load([
			'stakeholderAnalyses', 
			'stakeholderAnalyses.user', 
			'stakeholderAnalyses.projectRole',
		]); 

		return new ProjectStakeholderAnalysisResource($project); 
	}

	public function store(Request $request) {
		$stakeholderAnalysis = StakeholderAnalysis::make(
			$request->only([
				'project_id', 'user_id', 'project_role_id', 
				'power', 'interest', 'influence', 'attitude'
			])
		); 

		$stakeholderAnalysis->save(); 

		$project = Project::find($stakeholderAnalysis->project_id); 

		$project->load([
			'stakeholderAnalyses', 
			'stakeholderAnalyses.user', 
			'stakeholderAnalyses.projectRole',
		]); 

		return new ProjectStakeholderAnalysisResource($project); 
	}

	public function update(Request $request, StakeholderAnalysis $stakeholderAnalysis) {
		$stakeholderAnalysis->update(
			$request->only([
				'power', 'interest', 'influence', 'attitude'
			])
		); 

		$project = Project::find($stakeholderAnalysis->project_id); 

		$project->load([
			'stakeholderAnalyses', 
			'stakeholderAnalyses.user', 
			'stakeholderAnalyses.projectRole',
		]); 

		return new ProjectStakeholderAnalysisResource($project); 
	}

	public function destroy(StakeholderAnalysis $stakeholderAnalysis) {
		$stakeholderAnalysis->delete(); 
	}
}

