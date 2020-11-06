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


class ProjectRoleStoreTest extends TestCase
{
    public function test_it_fails_if_unauthenticated()
    {
        $this->json('POST', 'api/project-roles')
            ->assertStatus(401); //unauthenticated
    }

    public function test_if_administrator_can_add_project_role_for_his_project() {
        $this->seed(RolesTableSeeder::class); //rolesSeeder();  

        $user = factory(User::class)->create(); 
        $userQuery = new UserQuery($user); 
        $userQuery->syncRoleAsAdministrator(); 

        $project = factory(Project::class)->create(); 

        $userQuery->assignToProject($project); 

        $this->jsonAs($user, 'POST', "api/project-roles", $payload = [
            'project_id' => $project->id, 
            'name' => 'Project Tester', 
            'description' => 'Project Tester', 
        ]); 

        $this->assertDatabaseHas('project_roles', $payload); 

    }

    public function test_if_administrator_cant_add_project_role_if_not_his_project() {
        $this->seed(RolesTableSeeder::class); //rolesSeeder();  

        $user = factory(User::class)->create(); 
        $userQuery = new UserQuery($user); 
        $userQuery->syncRoleAsAdministrator(); 

        $project = factory(Project::class)->create(); 

        $this->jsonAs($user, 'POST', "api/project-roles", $payload = [
            'project_id' => $project->id, 
            'name' => 'Project Tester', 
            'description' => 'Project Tester', 
        ])->assertStatus(403); //403 FORBIDDEN
    }

    public function test_if_non_administrator_cant_add_project_role() {
        $this->seed(RolesTableSeeder::class); //rolesSeeder();  
        
        $user = factory(User::class)->create(); 
        $userQuery = new UserQuery($user); 
        $userQuery->syncRoleAsMember(); 

        $project = factory(Project::class)->create(); 

        $userQuery->assignToProject($project); 

        $this->jsonAs($user, 'POST', "api/project-roles", $payload = [
            'project_id' => $project->id, 
            'name' => 'Project Tester', 
            'description' => 'Project Tester', 
        ])->assertStatus(403); //403 FORBIDDEN

    }
}
