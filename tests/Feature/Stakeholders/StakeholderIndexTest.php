<?php

namespace Tests\Feature\Stakeholders;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\Queries\UserQuery; 

use App\Models\User; 
use App\Models\Project; 

use RolesTableSeeder; 


class StakeholderIndexTest extends TestCase
{
    /*
    test_it_fails_if_unauthenticated
    test_if_administrator_can_access_stakeholders
    test_if_not_administrator_then_cant_access_stakeholders
    test_authorization_fails_if_no_project_param_on_url
    test_authorization_fails_if_a_project_cant_be_found
    can_see_project_roles_fragment
    */

    public function test_it_fails_if_unauthenticated()
    {
        $this->json('GET', 'api/stakeholders?project=1')
            ->assertStatus(401); //unauthenticated
    }

    public function test_if_administrator_can_access_stakeholders() {
        $this->seed(RolesTableSeeder::class);

        $user = factory(User::class)->create(); 
        $userQuery = new UserQuery($user);
        $userQuery->syncRoleAsAdministrator(); 

        $project = factory(Project::class)->create(); 

        $userQuery->assignToProject($project); 

        (new UserQuery(
            factory(User::class)->create()
        ))->assignToProject($project); 

        $response = $this->jsonAs($user, 'GET', "api/stakeholders?project={$project->id}")
                    ->assertJsonCount(1, 'data'); 
        /*
            Administrator not include in the stakeholder list
        */
    }

    public function test_if_not_administrator_then_cant_access_stakeholders() {
        $this->seed(RolesTableSeeder::class);

        $user = factory(User::class)->create(); 
        $userQuery = new UserQuery($user);
        $userQuery->syncRoleAsMember(); 

        $project = factory(Project::class)->create(); 

        $userQuery->assignToProject($project); 

        $this->jsonAs($user, 'GET', 'api/stakeholders?project={$project->id}')
            ->assertStatus(403); //Forbidden
    }

    public function test_authorization_fails_if_no_project_param_on_url() {
        $this->seed(RolesTableSeeder::class);

        $user = factory(User::class)->create(); 
        $userQuery = (new UserQuery($user))->syncRoleAsAdministrator(); 

        $this->jsonAs($user, 'GET', "api/stakeholders")
            ->assertStatus(403); //Forbidden
    }

    public function test_authorization_fails_if_a_project_didnt_created_by_admin() {
        $this->seed(RolesTableSeeder::class);

        $user = factory(User::class)->create(); 
        $userQuery = (new UserQuery($user))->syncRoleAsAdministrator(); 

        $project = factory(Project::class)->create(); 

        $this->jsonAs($user, 'GET', "api/stakeholders?project={$project->id}")
            ->assertStatus(403); //Forbidden
    }
    
}