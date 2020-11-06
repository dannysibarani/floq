<?php

namespace Tests\Feature\Stakeholders;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\Queries\UserQuery; 

use App\Models\User; 
use App\Models\Project; 
use App\Models\Corporation; 

use RolesTableSeeder; 


class StakeholderShowTest extends TestCase
{
    /*
    test_it_fails_if_unauthenticated
    test_if_administrator_can_access_any_stakeholder
    test_if_not_administrator_then_cant_access_a_stakeholder
    test_authorization_fails_if_no_project_param_on_url
    test_authorization_fails_if_a_project_didnt_created_by_admin
    can_see_project_roles_fragment
    */

    public function test_it_fails_if_unauthenticated()
    {
        $this->json('GET', 'api/stakeholders/1?project=1')
            ->assertStatus(401); //unauthenticated
    }

    public function test_if_administrator_can_access_any_stakeholder() {
        $this->seed(RolesTableSeeder::class);

        $user = factory(User::class)->create(); 
        $userQuery = new UserQuery($user);
        $userQuery->syncRoleAsAdministrator(); 

        $user2 = factory(User::class)->create(); 
        $userQuery2 = new UserQuery($user2);
        $userQuery2->syncRoleAsMember(); 

        $corporation = factory(Corporation::class)->create(); 
        $userQuery->assignToCorporation($corporation); 
        $userQuery2->assignToCorporation($corporation); 

        $project = factory(Project::class)->create(); 
        $userQuery->assignToProject($project); 
        $userQuery2->assignToProject($project); 

        $response = $this->jsonAs($user, 'GET', "api/stakeholders/{$user2->id}?project={$project->id}") 
                        ->assertJsonFragment([
                            'id' => $user2->id 
                        ]); 
    }

    public function test_if_not_administrator_then_cant_access_a_stakeholder() {
        $this->seed(RolesTableSeeder::class);

        $user = factory(User::class)->create(); 
        $userQuery = new UserQuery($user);
        $userQuery->syncRoleAsMember(); 

        $user2 = factory(User::class)->create(); 
        $userQuery2 = new UserQuery($user2);
        $userQuery2->syncRoleAsMember(); 

        $corporation = factory(Corporation::class)->create(); 
        $userQuery->assignToCorporation($corporation); 
        $userQuery2->assignToCorporation($corporation); 

        $project = factory(Project::class)->create(); 
        $userQuery->assignToProject($project); 
        $userQuery2->assignToProject($project); 

        $this->jsonAs($user, 'GET', "api/stakeholders/{$user2->id}?project={$project->id}")
            ->assertStatus(403); //Forbidden
    }

    public function test_authorization_fails_if_no_project_param_on_url() {
        $this->seed(RolesTableSeeder::class);

        $user = factory(User::class)->create(); 
        $userQuery = (new UserQuery($user))->syncRoleAsAdministrator(); 

        $this->jsonAs($user, 'GET', "api/stakeholders/{$user->id}")
            ->assertStatus(403); //Forbidden
    }

    public function test_authorization_fails_if_a_project_didnt_created_by_admin() {
        $this->seed(RolesTableSeeder::class);

        $user = factory(User::class)->create(); 
        $userQuery = new UserQuery($user);
        $userQuery->syncRoleAsAdministrator(); 

        $user2 = factory(User::class)->create(); 
        $userQuery2 = new UserQuery($user2);
        $userQuery2->syncRoleAsAdministrator(); 

        $user3 = factory(User::class)->create(); 
        $userQuery3 = new UserQuery($user3);
        $userQuery3->syncRoleAsMember(); 

        $corporation = factory(Corporation::class)->create(); 
        $userQuery->assignToCorporation($corporation); 
        $userQuery2->assignToCorporation($corporation); 
        $userQuery3->assignToCorporation($corporation); 

        $project = factory(Project::class)->create(); 
        $userQuery->assignToProject($project); 

        $project2 = factory(Project::class)->create(); 
        $userQuery2->assignToProject($project2); 

        $userQuery3->assignToProject($project); 
        $userQuery3->assignToProject($project2); 

        $this->jsonAs($user2, 'GET', "api/stakeholders/{$user3->id}?project={$project->id}")
            ->assertStatus(403); //Forbidden
    }
}
