<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Traits\HasProjectRequestKey; 

use App\Http\Resources\Projects\ProjectStakeholderEngAssResource; 
use App\Http\Resources\StakeholderEngAsses\StakeholderEngAssShowResource; 

use App\Models\StakeholderEngAss; 
use App\Models\Project; 

class StakeholderEngAssController extends Controller
{
	use HasProjectRequestKey; 

	public function __construct() {
		$this->middleware(['auth:api']); 
		$this->authorizeResource(StakeholderEngAss::class); 
	}

	public function index(Request $request) {
		$this->authorize('viewAny', StakeholderEngAss::class); 

		$project_id = $request->get($this->getRequestKey()); 
		$project = Project::find($project_id); 

		$project->load([
			'stakeholderEngAsses', 
			'stakeholderEngAsses.user'
		]);

		return new ProjectStakeholderEngAssResource($project); 
	}

	public function show(StakeholderEngAss $stakeholderEngAss) {
		$stakeholderEngAss->load([
			'user'
		]);

		return new StakeholderEngAssShowResource($stakeholderEngAss); 
	}

	public function store(Request $request) {
		$stakeholderEngAss = StakeholderEngAss::make(
			$request->only([
				'project_id', 'user_id', 'unware', 'resistant', 'neutral', 'supportive', 'leading'
			])
		); 

		$stakeholderEngAss->save(); 

		$stakeholderEngAss->load([
			'user'
		]);

		return new StakeholderEngAssShowResource($stakeholderEngAss); 
	}

	public function update(Request $request, StakeholderEngAss $stakeholderEngAss) {
		$stakeholderEngAss->update(
			$request->only([
				'unware', 'resistant', 'neutral', 'supportive', 'leading'
			])
		); 

		$stakeholderEngAss->load([
			'user'
		]);

		return new StakeholderEngAssShowResource($stakeholderEngAss);
	}

	public function destroy(StakeholderEngAss $stakeholderEngAss) {
		$stakeholderEngAss->delete(); 
	}
}
