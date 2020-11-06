<?php

namespace App\Http\Controllers\Requirements;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Controllers\Traits\HasProjectRequestKey; 

use App\Http\Resources\Requirements\RequirementCategoryIndexResource; 

use App\Models\Requirement\RequirementCategory; 


class RequirementCategoryController extends Controller
{
	use HasProjectRequestKey; 

	public function __construct() {
		$this->middleware(['auth:api']); 
		$this->authorizeResource(RequirementCategory::class); 
	}

	public function index(Request $request) {
		$this->authorize('viewAny', RequirementCategory::class); 

		$project_id = $request->get($this->getRequestKey()); 

		$categories = RequirementCategory::where('project_id', $project_id)->get(); 

		return RequirementCategoryIndexResource::collection($categories); 
	}

	public function show(RequirementCategory $requirementCategory) {
		return new RequirementCategoryIndexResource($requirementCategory);
	}

	public function store(Request $request) {
		$requirementCategory = RequirementCategory::make(
			$request->only([
				'project_id', 'name', 'description'
			])
		); 

		$requirementCategory->save(); 

		return new RequirementCategoryIndexResource($requirementCategory);
	}

	public function update(Request $request, RequirementCategory $requirementCategory) {
		$requirementCategory->update(
			$request->only([
				'name', 'description'
			])
		); 

		return new RequirementCategoryIndexResource($requirementCategory);
	}

	public function destroy(RequirementCategory $requirementCategory) {
		$requirementCategory->delete(); 
	}
}
