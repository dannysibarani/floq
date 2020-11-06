<?php

namespace App\Http\Controllers\Requirements;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Http\Controllers\Traits\HasProjectRequestKey;

use App\Http\Resources\Requirements\RequirementPriorityIndexResource; 

use App\Models\Requirement\RequirementPriority; 


class RequirementPriorityController extends Controller
{
	use HasProjectRequestKey; 

	public function __construct() {
		$this->middleware(['auth:api']);
		$this->authorizeResource(RequirementPriority::class); 
	}

	public function index(Request $request) {
		$this->authorize('viewAny', RequirementPriority::class); 

		$project_id = $request->get($this->getRequestKey()); 

		$priorities = RequirementPriority::where('project_id', $project_id)->get(); 

		return RequirementPriorityIndexResource::collection($priorities); 
	}

	public function show(RequirementPriority $requirementPriority) {
		return new RequirementPriorityIndexResource($requirementPriority); 
	}

	public function store(Request $request) {
		$requirementPriority = RequirementPriority::make(
			$request->only([
				'project_id', 'name', 'description'
			])
		);

		$requirementPriority->save(); 

		return new RequirementPriorityIndexResource($requirementPriority);
	}

	public function update(Request $request, RequirementPriority $requirementPriority) {
		$requirementPriority->update(
			$request->only([
				'name', 'description'
			])
		); 

		return new RequirementPriorityIndexResource($requirementPriority);
	}

	public function destroy(RequirementPriority $requirementPriority) {
		$requirementPriority->delete(); 
	}
}
