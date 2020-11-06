<?php

use Illuminate\Database\Seeder;

use App\Models\Project; 
use App\Models\Seeders\ProjectManagerPolicySeeder; 
use App\Models\Seeders\ProjectSponsorPolicySeeder; 
use App\Models\Seeders\ProjectCustomerPolicySeeder; 
use App\Models\Seeders\ProductOwnerPolicySeeder; 

class PolicyResourceRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$project = Project::where('name', 'PIAMSBBFP')->first(); 
		//ProjectManagerPolicySeeder::create($project->id); 
        //ProjectSponsorPolicySeeder::create($project->id); 
        //ProjectCustomerPolicySeeder::create($project->id); 
        //ProductOwnerPolicySeeder::create($project->id); 
    }
}
