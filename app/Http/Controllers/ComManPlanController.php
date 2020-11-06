<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Traits\HasProjectRequestKey; 

use App\Http\Resources\Projects\ProjectComManPlanResource; 
use App\Http\Resources\ComManPlans\ComManPlanShowResource; 

use App\Models\Project; 
use App\Models\ComManPlan; 


class ComManPlanController extends Controller
{
	use HasProjectRequestKey; 

	public function __construct() {
		$this->middleware(['auth:api']); 
		$this->authorizeResource(ComManPlan::class); 
	}

	public function index(Request $request) {
		$this->authorize('viewAny', ComManPlan::class); 

		$project_id = $request->get($this->getRequestKey()); 
		$project = Project::find($project_id); 

		$project->load([
			'comManPlans', 
			'comManPlans.user'
		]);

		return new ProjectComManPlanResource($project); 
	}

	public function show(ComManPlan $comManPlan) {
		$comManPlan->load([
			'user'
		]);

		return new ComManPlanShowResource($comManPlan); 
	}

	public function store(Request $request) {
		$comManPlan = ComManPlan::make(
			$request->only([
				'project_id', 'user_id', 'information', 'method', 'timing_or_frequency', 'sender_or_initiator'
			])
		); 

		$comManPlan->save(); 

		$comManPlan->load([
			'user'
		]);

		return new ComManPlanShowResource($comManPlan); 
	}

	public function update(Request $request, ComManPlan $comManPlan) {
		$comManPlan->update(
			$request->only([
				'information', 'method', 'timing_or_frequency', 'sender_or_initiator'
			])
		); 

		$comManPlan->load([
			'user'
		]);

		return new ComManPlanShowResource($comManPlan);
	}

	public function destroy(ComManPlan $comManPlan) {
		$comManPlan->delete(); 
	}
}
