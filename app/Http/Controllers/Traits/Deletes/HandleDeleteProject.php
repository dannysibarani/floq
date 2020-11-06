<?php 

namespace App\Http\Controllers\Traits\Deletes; 

use App\Models\Project; 

use App\Http\Controllers\Traits\Deletes\HandleDeleteProjectRole; 
use App\Http\Controllers\Traits\Deletes\HandleDeleteProjectCharter; 

trait HandleDeleteProject {
	use HandleDeleteProjectRole, HandleDeleteProjectCharter; 

	public function deleteProject(Project $project) {
        if(!$approval->trashed()) {
			$project->update([
				'deleted_at' => now()
			]);
        }
        else {
        	$project->users()->detach();
        	$this->deleteProjectCharter($project->charter); 

        	foreach($project->projectRoles as $projectRole) {
        		$this->deleteProjectRole($projectRole); 
        	}

        	foreach($project->stakeholderRegisters as $stakeholderRegister) {
        		$stakeholderRegister->delete(); 
        	}

        	foreach($project->stakeholderAnalyses as $stakeholderAnalysis) {
        		$stakeholderAnalysis->delete(); 
        	}

        	foreach($project->requirements as $requirement) {
        		$requirement->delete(); 
        	}

        	$project->scope()->delete(); 

        	foreach($project->riskRegisters as $riskRegister) {
        		$riskRegister->delete(); 
        	}

        	foreach($project->qualityMetrics as $qualityMetric) {
        		$qualityMetric->delete(); 
        	}

        	foreach($project->stakeholderEngAsses as $stakeholderEngAss) {
        		$stakeholderEngAss->delete(); 
        	}

        	foreach($project->comManPlans as $comManPlan) {
        		$comManPlan->delete(); 
        	}

        	foreach($project->requirementVerifications as $requirementVerification) {
        		$requirementVerification->delete(); 
        	}

        	foreach($project->requirementCategories as $requirementCategory) {
        		$requirementCategory->delete(); 
        	}

        	foreach($project->requirementPriorities as $requirementPriority) {
        		$requirementPriority->delete(); 
        	}

        	foreach($project->requirementPhases as $requirementPhase) {
        		$requirementPhase->delete(); 
        	}

        	$project->approvals()->delete(); 

        }
	}
}