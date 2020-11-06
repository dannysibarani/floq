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

class ProjectRoleShowTest extends TestCase
{
    public function test_it_fails_if_unauthenticated()
    {
        $this->json('GET', 'api/project-roles/1')
            ->assertStatus(401); //unauthenticated
    }

    public function test_if_administrator_can_access_a_certain_project_roles() {
        $this->seed(RolesTableSeeder::class);

        $user = factory(User::class)->create(); 
        $userQuery = new UserQuery($user);
        $userQuery->syncRoleAsAdministrator(); 

        $project = factory(Project::class)->create(); 

        $userQuery->assignToProject($project); 

        $projectRole = $project->projectRoles->where('name', 'Project Manager')->first(); 

        $response = $this->jsonAs($user, 'GET', "api/project-roles/{$projectRole->id}"); 

        $response->assertJsonFragment([
            'id' => $projectRole->id
        ]);

        /*
            On default when create a project --> will create 4 default project roles --> see App\Models\Seeders\ProductRolesSeeder (implemented on the observer)
        */
    }

    public function test_if_not_administrator_then_cant_access_a_certain_project_roles() {
        $this->seed(RolesTableSeeder::class);

        $user = factory(User::class)->create(); 
        $userQuery = new UserQuery($user);
        $userQuery->syncRoleAsMember(); 

        $project = factory(Project::class)->create(); 

        $userQuery->assignToProject($project); 

        $projectRole = $project->projectRoles()->where('name', 'Project Manager')->first();

        $this->jsonAs($user, 'GET', "api/project-roles/{$projectRole->id}")
            ->assertStatus(403); //Forbidden
    }

    public function test_authorization_fails_if_a_project_didnt_created_by_admin() {
        $this->seed(RolesTableSeeder::class);

        $user = factory(User::class)->create(); 
        $userQuery = (new UserQuery($user))->syncRoleAsAdministrator(); 

        $project = factory(Project::class)->create(); 

        $projectRole = $project->projectRoles()->where('name', 'Project Manager')->first();

        $this->jsonAs($user, 'GET', "api/project-roles/{$projectRole->id}")
            ->assertStatus(403); //Forbidden
    }
}
