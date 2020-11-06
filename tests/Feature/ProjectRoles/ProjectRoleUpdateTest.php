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

class ProjectRoleUpdateTest extends TestCase
{
    public function test_it_fails_if_unauthenticated()
    {
        $this->json('PATCH', 'api/project-roles/1')
            ->assertStatus(401); //unauthenticated
    }

    public function test_it_fails_if_project_role_cant_be_found()
    {
        $user = factory(User::class)->create();

        $response = $this->jsonAs($user, 'PATCH', 'api/project-roles/1')
            ->assertStatus(404);
    }

    public function test_it_update_the_project_role() {
        $this->seed(RolesTableSeeder::class); //rolesSeeder();  
        
        $user = factory(User::class)->create(); 
        $userQuery = new UserQuery($user); 
        $userQuery->syncRoleAsAdministrator(); 

        $userQuery->addProject(
            $project = factory(Project::class)->create()
        ); 

        $projectRole = $project->projectRoles()->where('name', 'Project Manager')->first(); 

        $this->jsonAs($user, 'PATCH', "api/project-roles/{$projectRole->id}", $projectRole = [
            'name' => 'Project Manager', 
            'description' => 'This is Project Manager description', 
        ]);

        $this->assertDatabaseHas('project_roles', $projectRole); 
    }

    public function test_it_returns_a_project_role_resources_when_created() {
        $this->seed(RolesTableSeeder::class); //rolesSeeder();  
        
        $user = factory(User::class)->create(); 
        $userQuery = new UserQuery($user); 
        $userQuery->syncRoleAsAdministrator(); 

        $userQuery->addProject(
            $project = factory(Project::class)->create()
        ); 

        $projectRole = $project->projectRoles()->where('name', 'Project Manager')->first();

        $response = $this->jsonAs($user, 'PATCH', "api/project-roles/{$projectRole->id}", $projectRole = [
            'name' => 'Project Manager', 
            'description' => 'This is Project Manager description', 
        ]);

        $response->assertJsonFragment([
            'id' => json_decode($response->getContent())->data->id
        ]);
    }

    public function test_if_only_administrator_and_has_project_can_update_the_project_role() {
        $this->seed(RolesTableSeeder::class); //rolesSeeder(); 

        $user = factory(User::class)->create(); 
        $userQuery = new UserQuery($user); 
        $userQuery->syncRoleAsAdministrator(); 

        $project = factory(Project::class)->create(); 

        $projectRole = $project->projectRoles()->where('name', 'Project Manager')->first();

        $this->jsonAs($user, 'PATCH', "api/project-roles/{$projectRole->id}", $payload=[
            'name' => 'Project Manager', 
            'description' => 'This is Project Manager description', 
        ])->assertStatus(403); //403 FORBIDDEN
    }
}
