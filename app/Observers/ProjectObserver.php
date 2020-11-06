<?php

namespace App\Observers;

use App\Models\Project;

use App\Models\Seeders\ProjectRolesSeeder; 
use App\Models\Seeders\ProjectManagerPolicySeeder;
use App\Models\Seeders\ProjectSponsorPolicySeeder;
use App\Models\Seeders\ProductManagerPolicySeeder;
use App\Models\Seeders\ProjectCustomerPolicySeeder;
use App\Models\Seeders\SteeringCommitteePolicySeeder;
use App\Models\Seeders\BusinessAnalystPolicySeeder;
use App\Models\Seeders\SolutionManagerPolicySeeder;
use App\Models\Seeders\PMOManagerPolicySeeder; 
use App\Models\Seeders\HeadOfDeliveryPolicySeeder; 
use App\Models\Seeders\ProgramManagerPolicySeeder;
use App\Models\Seeders\ProjectTeamManagerialPolicySeeder;
use App\Models\Seeders\ProjectTeamTechnicalPolicySeeder;
use App\Models\Seeders\ResourceManagerPolicySeeder; 
use App\Models\Seeders\ProcurementManagerPolicySeeder;
use App\Models\Seeders\LogisticManagerPolicySeeder;
use App\Models\Seeders\OtherFunctionalManagerPolicySeeder;
use App\Models\Seeders\CustomerBusinessManagerPolicySeeder;
use App\Models\Seeders\CustomerFunctionManagerPolicySeeder;
use App\Models\Seeders\CustomerSMEPolicySeeder;
use App\Models\Seeders\VendorSupplierContractorPolicySeeder;
use App\Models\Seeders\OtherExternalStakeholderPolicySeeder;


class ProjectObserver
{
    public function created(Project $project)
    {
        ProjectRolesSeeder::create($project->id); 
        ProjectManagerPolicySeeder::create($project->id); 
        ProjectSponsorPolicySeeder::create($project->id); 
        ProductManagerPolicySeeder::create($project->id); 
        ProjectCustomerPolicySeeder::create($project->id); 
        SteeringCommitteePolicySeeder::create($project->id); 
        BusinessAnalystPolicySeeder::create($project->id); 
        SolutionManagerPolicySeeder::create($project->id);
        PMOManagerPolicySeeder::create($project->id); 
        HeadOfDeliveryPolicySeeder::create($project->id); 
        ProgramManagerPolicySeeder::create($project->id); 
        ProjectTeamManagerialPolicySeeder::create($project->id); 
        ProjectTeamTechnicalPolicySeeder::create($project->id);
        ResourceManagerPolicySeeder::create($project->id);
        ProcurementManagerPolicySeeder::create($project->id);
        LogisticManagerPolicySeeder::create($project->id);
        OtherFunctionalManagerPolicySeeder::create($project->id);
        CustomerBusinessManagerPolicySeeder::create($project->id);
        CustomerFunctionManagerPolicySeeder::create($project->id);
        CustomerSMEPolicySeeder::create($project->id);
        VendorSupplierContractorPolicySeeder::create($project->id);
        OtherExternalStakeholderPolicySeeder::create($project->id);
    }

    public function updated(Project $project)
    {

    }

    public function deleted(Project $project)
    {
        
    }

    public function restored(Project $project)
    {
        
    }

    public function forceDeleted(Project $project)
    {

    }
}
