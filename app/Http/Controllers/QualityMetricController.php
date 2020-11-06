<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Traits\HasProjectRequestKey; 

use App\Http\Resources\Projects\ProjectQualityMetricResource; 
use App\Http\Resources\QualityMetrics\QualityMetricShowResource; 

use App\Models\QualityMetric; 
use App\Models\Project; 


class QualityMetricController extends Controller
{
	use HasProjectRequestKey; 

	public function __construct() {
		$this->middleware(['auth:api']); 
		$this->authorizeResource(QualityMetric::class); 
	}

	public function index(Request $request) {
		$this->authorize('viewAny', QualityMetric::class); 

		$project_id = $request->get($this->getRequestKey()); 
		$project = Project::find($project_id); 

		$project->load([
			'qualityMetrics'
		]);

		return new ProjectQualityMetricResource($project); 
	}

	public function show(QualityMetric $qualityMetric) {
		return new QualityMetricShowResource($qualityMetric); 
	}

	public function store(Request $request) {
		$qualityMetric = QualityMetric::make(
			$request->only([
				'project_id', 'sid', 'items', 'metric', 'measurement_method'
			])
		); 

		$qualityMetric->save(); 

		return new QualityMetricShowResource($qualityMetric); 
	}

	public function update(Request $request, QualityMetric $qualityMetric) {
		$qualityMetric->update(
			$request->only([
				'sid', 'items', 'metric', 'measurement_method'
			])
		); 

		return new QualityMetricShowResource($qualityMetric); 
	}

	public function destroy(QualityMetric $qualityMetric) {
		$qualityMetric->delete(); 
	}
}
