<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Traits\HasProjectRequestKey; 

use App\Http\Resources\ProjectScopeStatements\ProjectScopeStatementIndexResource; 

use App\Models\ProjectScopeStatement; 


class ProjectScopeStatementController extends Controller
{
	use HasProjectRequestKey; 

	public function __construct() {
		$this->middleware(['auth:api']); 
		$this->authorizeResource(ProjectScopeStatement::class); 
	}

	public function index(Request $request) {
		$this->authorize('viewAny', ProjectScopeStatement::class); 

		$project_id = $request->get($this->getRequestKey());

		$projectScopeStatement = ProjectScopeStatement::with('project')->where('project_id', $project_id)->first(); 
		//$projectScopeStatement = $request->user()->projects()->find($project_id)->scope; 

		return new ProjectScopeStatementIndexResource($projectScopeStatement); 
	}

	public function show(ProjectScopeStatement $projectScopeStatement) {
		$projectScopeStatement->load([
			'project'
		]);

		return new ProjectScopeStatementIndexResource($projectScopeStatement); 
	}

	public function store(Request $request) {
		$projectScopeStatement = ProjectScopeStatement::make(
			$request->only([
				'project_id', 'project_scope_defenition', 'project_deliverables', 'product_acceptance_criteria', 'project_exclusion', 'project_constrains', 'project_assumptions'
			])
		); 

		$projectScopeStatement->save(); 

		$projectScopeStatement->load([
			'project'
		]);

		return new ProjectScopeStatementIndexResource($projectScopeStatement); 
	}

	public function update(Request $request, ProjectScopeStatement $projectScopeStatement) {
		$projectScopeStatement->update(
			$request->only([
				'project_scope_defenition', 'project_deliverables', 'product_acceptance_criteria', 'project_exclusion', 'project_constrains', 'project_assumptions'
			])
		); 

		$projectScopeStatement->load([
			'project'
		]);

		return new ProjectScopeStatementIndexResource($projectScopeStatement); 
	}

	public function destroy(ProjectScopeStatement $projectScopeStatement) {
		$projectScopeStatement->delete(); 
	}
}
