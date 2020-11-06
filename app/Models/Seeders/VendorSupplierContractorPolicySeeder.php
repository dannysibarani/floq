<?php

namespace App\Models\Seeders; 

use App\Models\Project; 
use App\Models\Policy; 
use App\Models\PolicyResource;
use App\Models\Resource; 

class VendorSupplierContractorPolicySeeder 
{
    public static function create($projectId) {
        $project = Project::find($projectId); 
        $projectRoles = $project->projectRoles()->get(); 

        $projectRole = $projectRoles->where('name', 'Vendor, Supplier, Contractor')->first(); 
        $policyResources = PolicyResource::get();

        foreach($policyResources as $policyResource) {
            $resource = Resource::find($policyResource->resource_id);
            $policy = Policy::find($policyResource->policy_id); 

			/*PROJECT*/
			if($resource->name == 'PROJECT' && ($policy->name == 'VIEW')) {
			    $projectRole->policyResources()->attach($policyResource, [
			        'is_permitted' => true
			    ]);
			}

        }
	}
}