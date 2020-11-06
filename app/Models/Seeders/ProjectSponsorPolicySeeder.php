<?php

namespace App\Models\Seeders; 

use App\Models\Project; 
use App\Models\Policy; 
use App\Models\PolicyResource;

use App\Models\Resource; 


class ProjectSponsorPolicySeeder 
{
	public static function create($projectId) {
        $project = Project::find($projectId); 
        $projectRoles = $project->projectRoles()->get(); 

        $projectRole = $projectRoles->where('name', 'Project Sponsor')->first(); 
        $policyResources = PolicyResource::get();

        foreach($policyResources as $policyResource) {
            $resource = Resource::find($policyResource->resource_id);
            $policy = Policy::find($policyResource->policy_id); 

            /*PROJECT*/
            if($resource->name == 'PROJECT' && ($policy->name == 'CREATE' || $policy->name == 'VIEW' || $policy->name == 'UPDATE' || $policy->name == 'APPROVE' || $policy->name == 'DELETE' )) {
                $projectRole->policyResources()->attach($policyResource, [
                    'is_permitted' => true
                ]);
            }

            /*STAKEHOLDER*/
            if($resource->name == 'STAKEHOLDER' && ($policy->name == 'CREATE' || $policy->name == 'VIEW' || $policy->name == 'UPDATE' || $policy->name == 'DELETE' )) {
                $projectRole->policyResources()->attach($policyResource, [
                    'is_permitted' => true
                ]);
            }

            /*PROJECT_ROLE*/
            if($resource->name == 'PROJECT_ROLE' && ($policy->name == 'VIEW')) {
                $projectRole->policyResources()->attach($policyResource, [
                    'is_permitted' => true
                ]);
            }

            /*PROJECT_CHARTER*/
            if($resource->name == 'PROJECT_CHARTER' && ($policy->name == 'CREATE' || $policy->name == 'VIEW' || $policy->name == 'UPDATE' || $policy->name == 'APPROVE' || $policy->name == 'DELETE' )) {
                $projectRole->policyResources()->attach($policyResource, [
                    'is_permitted' => true
                ]);
            }

            /*STAKEHOLDER_REGISTER*/
            if($resource->name == 'STAKEHOLDER_REGISTER' && ($policy->name == 'CREATE' || $policy->name == 'VIEW' || $policy->name == 'UPDATE' || $policy->name == 'DELETE' )) {
                $projectRole->policyResources()->attach($policyResource, [
                    'is_permitted' => true
                ]);
            }

            /*STAKEHOLDER_ANALYSIS*/
            if($resource->name == 'STAKEHOLDER_ANALYSIS' && ($policy->name == 'CREATE' || $policy->name == 'VIEW' || $policy->name == 'UPDATE' || $policy->name == 'DELETE' )) {
                $projectRole->policyResources()->attach($policyResource, [
                    'is_permitted' => true
                ]);
            }

            /*REQUIREMENT*/
            if($resource->name == 'REQUIREMENT' && ($policy->name == 'VIEW' || $policy->name == 'APPROVE')) {
                $projectRole->policyResources()->attach($policyResource, [
                    'is_permitted' => true
                ]);
            }

            /*REQUIREMENT_DOCUMENTATION*/
            /*if($resource->name == 'REQUIREMENT_DOCUMENTATION' && ($policy->name == 'VIEW' || $policy->name == 'APPROVE')) {
                $projectRole->policyResources()->attach($policyResource, [
                    'is_permitted' => true
                ]);
            }*/

            /*REQUIREMENT_TRACEABLITY_MATRIX*/
            /*if($resource->name == 'REQUIREMENT_TRACEABLITY_MATRIX' && ($policy->name == 'VIEW' || $policy->name == 'APPROVE')) {
                $projectRole->policyResources()->attach($policyResource, [
                    'is_permitted' => true
                ]);
            }*/

            /*PROJECT_SCOPE_STATEMENT*/
            if($resource->name == 'PROJECT_SCOPE_STATEMENT' && ($policy->name == 'VIEW' || $policy->name == 'APPROVE')) {
                $projectRole->policyResources()->attach($policyResource, [
                    'is_permitted' => true
                ]);
            }

            /*WBS*/
            if($resource->name == 'WBS' && ($policy->name == 'VIEW' || $policy->name == 'APPROVE')) {
                $projectRole->policyResources()->attach($policyResource, [
                    'is_permitted' => true
                ]);
            }

            /*ACTIVITY_LIST*/
            if($resource->name == 'ACTIVITY_LIST' && ($policy->name == 'VIEW' || $policy->name == 'APPROVE')) {
                $projectRole->policyResources()->attach($policyResource, [
                    'is_permitted' => true
                ]);
            }

            /*DURATION_ESTIMATE*/
            if($resource->name == 'DURATION_ESTIMATE' && ($policy->name == 'VIEW' || $policy->name == 'APPROVE')) {
                $projectRole->policyResources()->attach($policyResource, [
                    'is_permitted' => true
                ]);
            }

            /*SCHEDULE*/
            if($resource->name == 'SCHEDULE' && ($policy->name == 'VIEW' || $policy->name == 'APPROVE')) {
                $projectRole->policyResources()->attach($policyResource, [
                    'is_permitted' => true
                ]);
            }

            /*ACTIVITY_COST_ESTIMATE*/
            if($resource->name == 'ACTIVITY_COST_ESTIMATE' && ($policy->name == 'VIEW' || $policy->name == 'APPROVE')) {
                $projectRole->policyResources()->attach($policyResource, [
                    'is_permitted' => true
                ]);
            }

            /*BUDGET*/
            if($resource->name == 'BUDGET' && ($policy->name == 'VIEW' || $policy->name == 'APPROVE')) {
                $projectRole->policyResources()->attach($policyResource, [
                    'is_permitted' => true
                ]);
            }

            /*QUALITY_METRIC*/
            if($resource->name == 'QUALITY_METRIC' && ($policy->name == 'VIEW' || $policy->name == 'APPROVE')) {
                $projectRole->policyResources()->attach($policyResource, [
                    'is_permitted' => true
                ]);
            }

            /*PROJECT_ORGANIZATION*/
            if($resource->name == 'PROJECT_ORGANIZATION' && ($policy->name == 'VIEW' || $policy->name == 'APPROVE')) {
                $projectRole->policyResources()->attach($policyResource, [
                    'is_permitted' => true
                ]);
            }

            /*COMMUNICATION_MANAGEMENT_PLAN*/
            if($resource->name == 'COMMUNICATION_MANAGEMENT_PLAN' && ($policy->name == 'VIEW' || $policy->name == 'APPROVE')) {
                $projectRole->policyResources()->attach($policyResource, [
                    'is_permitted' => true
                ]);
            }

            /*RISK_REGISTER*/
            if($resource->name == 'RISK_REGISTER' && ($policy->name == 'VIEW' || $policy->name == 'APPROVE')) {
                $projectRole->policyResources()->attach($policyResource, [
                    'is_permitted' => true
                ]);
            }

            /*STAKEHOLDER_ENGAGEMENT_ASSESSMENT*/
            if($resource->name == 'STAKEHOLDER_ENGAGEMENT_ASSESSMENT' && ($policy->name == 'CREATE' || $policy->name == 'VIEW' || $policy->name == 'UPDATE' || $policy->name == 'DELETE' )) {
                $projectRole->policyResources()->attach($policyResource, [
                    'is_permitted' => true
                ]);
            }

            /*ISSUE_LOG*/
            if($resource->name == 'ISSUE_LOG' && ($policy->name == 'VIEW')) {
                $projectRole->policyResources()->attach($policyResource, [
                    'is_permitted' => true
                ]);
            }

            /*CHANGE_REQUEST*/
            if($resource->name == 'CHANGE_REQUEST' && ($policy->name == 'VIEW' || $policy->name == 'APPROVE')) {
                $projectRole->policyResources()->attach($policyResource, [
                    'is_permitted' => true
                ]);
            }

            /*PROJECT_STATUS_REPORT*/
            if($resource->name == 'PROJECT_STATUS_REPORT' && ($policy->name == 'VIEW' || $policy->name == 'APPROVE')) {
                $projectRole->policyResources()->attach($policyResource, [
                    'is_permitted' => true
                ]);
            }

            /*PROJECT_CLOSEOUT*/
            if($resource->name == 'PROJECT_CLOSEOUT' && ($policy->name == 'VIEW' || $policy->name == 'APPROVE')) {
                $projectRole->policyResources()->attach($policyResource, [
                    'is_permitted' => true
                ]);
            }

        }

	}
}