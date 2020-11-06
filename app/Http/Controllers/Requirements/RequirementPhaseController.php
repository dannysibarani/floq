<?php

namespace App\Http\Controllers\Requirements;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Controllers\Traits\HasProjectRequestKey;

use App\Http\Resources\Requirements\RequirementPhaseIndexResource; 

use App\Models\Requirement\RequirementPhase; 

class RequirementPhaseController extends Controller
{
	use HasProjectRequestKey; 

	public function __construct() {
		$this->middleware(['auth:api']);
		$this->authorizeResource(RequirementPhase::class); 
	}

	public function index(Request $request) {
		$this->authorize('viewAny', RequirementPhase::class); 

		$project_id = $request->get($this->getRequestKey()); 
		$phases = RequirementPhase::where('project_id', $project_id)->get(); 

		return RequirementPhaseIndexResource::collection($phases); 
	}

	public function show(RequirementPhase $requirementPhase) {
		return new RequirementPhaseIndexResource($requirementPhase); 
	}

	public function store(Request $request) {
		$requirementPhase = RequirementPhase::make(
			$request->only([
				'project_id', 'name', 'description'
			])
		); 

		$requirementPhase->save(); 

		return new RequirementPhaseIndexResource($requirementPhase); 
	}

	public function update(Request $request, RequirementPhase $requirementPhase) {
		$requirementPhase->update(
			$request->only([
				'name', 'description'
			])
		); 

		return new RequirementPhaseIndexResource($requirementPhase); 
	}

	public function destroy(RequirementPhase $requirementPhase) {
		$requirementPhase->delete(); 
	}
}
