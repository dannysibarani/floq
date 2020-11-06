<?php

namespace App\Http\Controllers\Requirements;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Controllers\Traits\HasProjectRequestKey;

use App\Http\Resources\Requirements\RequirementVerificationIndexResource; 

use App\Models\Requirement\RequirementVerification; 

class RequirementVerificationController extends Controller
{
	use HasProjectRequestKey; 

	public function __construct() {
		$this->middleware(['auth:api']);
		$this->authorizeResource(RequirementVerification::class); 
	}

	public function index(Request $request) {
		$this->authorize('viewAny', RequirementVerification::class); 

		$project_id = $request->get($this->getRequestKey()); 

		$verifications = RequirementVerification::where('project_id', $project_id)->get(); 

		return RequirementVerificationIndexResource::collection($verifications); 
	}

	public function show(RequirementVerification $requirementVerification) {
		return new RequirementVerificationIndexResource($requirementVerification); 
	}

	public function store(Request $request) {
		$requirementVerification = RequirementVerification::make(
			$request->only([
				'project_id', 'name', 'description'
			])
		); 

		$requirementVerification->save(); 

		return new RequirementVerificationIndexResource($requirementVerification); 
	}

	public function update(Request $request, RequirementVerification $requirementVerification) {
		$requirementVerification->update(
			$request->only([
				'name', 'description'
			])
		); 

		return new RequirementVerificationIndexResource($requirementVerification); 
	}

	public function destroy(RequirementVerification $requirementVerification) {
		$requirementVerification->delete(); 
	}
}
