<?php

namespace Tests\Feature\ProjectRoles;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


use App\Models\Queries\UserQuery; 

use App\Models\User; 
use App\Models\Project; 
use App\Models\ProjectRole; 

use RolesTableSeeder; 

class ProjectRoleIndexTest extends TestCase
{
    public function test_it_fails_if_unauthenticated()
    {
        $this->json('GET', 'api/project-roles')
            ->assertStatus(401); //unauthenticated
    }

    public function test_if_administrator_can_access_project_roles() {
        $this->seed(RolesTableSeeder::class);

        $user = factory(User::class)->create(); 
        $userQuery = new UserQuery($user);
        $userQuery->syncRoleAsAdministrator(); 

        $project = factory(Project::class)->create(); 

        $userQuery->assignToProject($project); 

        $response = $this->jsonAs($user, 'GET', "api/project-roles?project={$project->id}")
                    ->assertJsonCount(4, 'data'); 
        /*
        	On default when create a project --> will create 4 default project roles --> see App\Models\Seeders\ProductRolesSeeder (implemented on the observer)
        */
    }

    public function test_if_not_administrator_then_cant_access_project_roles() {
        $this->seed(RolesTableSeeder::class);

        $user = factory(User::class)->create(); 
        $userQuery = new UserQuery($user);
        $userQuery->syncRoleAsMember(); 

        $project = factory(Project::class)->create(); 

        $userQuery->assignToProject($project); 

        $this->jsonAs($user, 'GET', 'api/project-roles?project={$project->id}')
            ->assertStatus(403); //Forbidden
    }

    public function test_authorization_fails_if_no_project_param_on_url() {
        $this->seed(RolesTableSeeder::class);

        $user = factory(User::class)->create(); 
        $userQuery = (new UserQuery($user))->syncRoleAsAdministrator(); 

        $this->jsonAs($user, 'GET', "api/project-roles")
            ->assertStatus(403); //Forbidden
    }

    public function test_authorization_fails_if_a_project_didnt_created_by_admin() {
        $this->seed(RolesTableSeeder::class);

        $user = factory(User::class)->create(); 
        $userQuery = (new UserQuery($user))->syncRoleAsAdministrator(); 

        $project = factory(Project::class)->create(); 

        $this->jsonAs($user, 'GET', "api/project-roles?project={$project->id}")
            ->assertStatus(403); //Forbidden
    }
    
}
