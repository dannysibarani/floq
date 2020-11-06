<?php

namespace App\Models\Seeders; 

use App\Models\ProjectRole; 


class ProjectRolesSeeder 
{
	/**
		Every Project should have these roles: Project Manager, Project Sponsor, Project Customer and Product Owner
	**/
	public static function create($projectId) {
        $roleProjectManager = ProjectRole::create([
            'project_id' => $projectId, 
            'name' => 'Project Manager', 
            'description' => 'Project Manager',  
        ]);  

        $roleProjectSponsor = ProjectRole::create([
            'project_id' => $projectId, 
            'name' => 'Project Sponsor', 
            'description' => 'Project Sponsor', 
        ]); 

        $roleProjectCustomer = ProjectRole::create([
            'project_id' => $projectId, 
            'name' => 'Project Customer', 
            'description' => 'Project Customer', 
        ]); 

        $roleProductManager = ProjectRole::create([
            'project_id' => $projectId, 
            'name' => 'Product Manager', 
            'description' => 'Product Manager', 
        ]); 

        ProjectRole::create([
            'project_id' => $projectId, 
            'name' => 'Steering Committee', 
            'description' => 'Steering Committee', 
        ]); 

        ProjectRole::create([
            'project_id' => $projectId, 
            'name' => 'Business Analyst', 
            'description' => 'Business Analyst', 
        ]); 

        ProjectRole::create([
            'project_id' => $projectId, 
            'name' => 'Solution Manager', 
            'description' => 'Solution Manager', 
        ]); 

        ProjectRole::create([
            'project_id' => $projectId, 
            'name' => 'PMO Manager', 
            'description' => 'PMO Manager', 
        ]); 

        ProjectRole::create([
            'project_id' => $projectId, 
            'name' => 'Head of Delivery', 
            'description' => 'Head of Delivery', 
        ]); 

        ProjectRole::create([
            'project_id' => $projectId, 
            'name' => 'Program Manager', 
            'description' => 'Program Manager', 
        ]); 

        ProjectRole::create([
            'project_id' => $projectId, 
            'name' => 'Project Team (Managerial)', 
            'description' => 'Project Team (Managerial)', 
        ]); 

        ProjectRole::create([
            'project_id' => $projectId, 
            'name' => 'Project Team (Technical)', 
            'description' => 'Project Team (Technical)', 
        ]); 

        ProjectRole::create([
            'project_id' => $projectId, 
            'name' => 'Resource Manager', 
            'description' => 'Resource Manager', 
        ]); 

        ProjectRole::create([
            'project_id' => $projectId, 
            'name' => 'Procurement Manager', 
            'description' => 'Procurement Manager', 
        ]); 

        ProjectRole::create([
            'project_id' => $projectId, 
            'name' => 'Logistic Manager', 
            'description' => 'Logistic Manager', 
        ]); 

        ProjectRole::create([
            'project_id' => $projectId, 
            'name' => 'Other Functional Manager', 
            'description' => 'Other Functional Manager', 
        ]); 

        ProjectRole::create([
            'project_id' => $projectId, 
            'name' => 'Customer Business Manager', 
            'description' => 'Customer Business Manager', 
        ]); 

        ProjectRole::create([
            'project_id' => $projectId, 
            'name' => 'Customer Function Manager', 
            'description' => 'Customer Function Manager', 
        ]); 

        ProjectRole::create([
            'project_id' => $projectId, 
            'name' => 'Customer SME', 
            'description' => 'Customer SME', 
        ]); 

        ProjectRole::create([
            'project_id' => $projectId, 
            'name' => 'Vendor, Supplier, Contractor', 
            'description' => 'Vendor, Supplier, Contractor', 
        ]); 

        ProjectRole::create([
            'project_id' => $projectId, 
            'name' => 'Other External Stakeholder', 
            'description' => 'Other External Stakeholder', 
        ]); 
	}
}

