<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Traits\HasProjectRequestKey; 

use App\Http\Resources\Projects\ProjectRiskRegisterResource; 
use App\Http\Resources\RiskRegisters\RiskRegisterShowResource; 

use App\Models\RiskRegister; 
use App\Models\Project; 


class RiskRegisterController extends Controller
{
	use HasProjectRequestKey; 

	public function __construct() {
		$this->middleware(['auth:api']); 
		$this->authorizeResource(RiskRegister::class); 
	}

	public function index(Request $request) {
		$this->authorize('viewAny', RiskRegister::class); 

		$project_id = $request->get($this->getRequestKey()); 

		$project = Project::find($project_id); 

		$project->load([
			'riskRegisters'
		]);

		return new ProjectRiskRegisterResource($project); 
	}

	public function show(RiskRegister $riskRegister) {
		return new RiskRegisterShowResource($riskRegister); 
	}

	public function store(Request $request) {
		$riskRegister = RiskRegister::make(
			$request->only([
				'project_id', 'sid', 'risk_category', 'risk_event', 'probability', 'impact', 'pxi', 'cost_value', 'contigency_value', 'risk_response', 'project_role_id'
			])
		); 

		$riskRegister->save(); 

		return new RiskRegisterShowResource($riskRegister); 
	}

	public function update(Request $request, RiskRegister $riskRegister) {
		$riskRegister->update(
			$request->only([
				'sid', 'risk_category', 'risk_event', 'probability', 'impact', 'pxi', 'cost_value', 'contigency_value', 'risk_response', 'project_role_id'
			])
		); 

		return new RiskRegisterShowResource($riskRegister); 
	}

	public function destroy(RiskRegister $riskRegister) {
		$riskRegister->delete(); 
	}
}
