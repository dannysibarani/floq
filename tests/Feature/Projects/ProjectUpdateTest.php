<?php

namespace Tests\Feature\Projects;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\User; 
use App\Models\Project; 

use App\Models\Queries\UserQuery; 

use RolesTableSeeder; 


class ProjectUpdateTest extends TestCase
{
    /*
    test_it_fails_if_unauthenticated
    test_it_fails_if_project_cant_be_found
    test_it_required_a_name --> don't need if only change project_title
    test_it_has_a_unique_name --> don't need
    test_it_required_a_project_title --> don't need
    test_it_update_the_project
    test_it_returns_a_project_resources_when_created
    test_if_only_administrator_and_has_project_can_update_the_project
    */
    public function test_it_fails_if_unauthenticated()
    {
        $this->json('PATCH', 'api/projects/1')
            ->assertStatus(401); //unauthenticated; 404 not found
    }

    public function test_it_fails_if_project_cant_be_found()
    {
        $user = factory(User::class)->create();

        $response = $this->jsonAs($user, 'PATCH', 'api/projects/1')
            ->assertStatus(404);
    }

    /*public function test_it_required_a_name() {
        $this->seed(RolesTableSeeder::class); //rolesSeeder();  
        
        $user = factory(User::class)->create(); 
        $userQuery = new UserQuery($user); 
        $userQuery->syncRoleAsAdministrator(); 

        $userQuery->addProject(
            $project = factory(Project::class)->create()
        ); 
        $this->jsonAs($user, 'PATCH', "api/projects/{$project->id}")
            ->assertJsonValidationErrors(['name']); 
    }

    public function test_it_has_a_unique_name() {
        $this->seed(RolesTableSeeder::class); //rolesSeeder();  

        //Create User with Administrator role
        $user = factory(User::class)->create(); 
        $userQuery = new UserQuery($user); 
        $userQuery->syncRoleAsAdministrator(); 

        //Create a project so we can check if the name must be unique
        $userQuery->addProject(
            $project1 = factory(Project::class)->create([
                'name' => 'PRJTEST1'
            ])
        ); 

        //Create a second project
        $userQuery->addProject(
            $project2 = factory(Project::class)->create([
                'name' => 'PRJTEST2'
            ])
        ); 

        //Update project2.name = 'PRJTEST1' --> result should be error
        $this->jsonAs($user, 'PATCH', "api/projects/{$project2->id}", $payload = [
            'name' => $project1->name, 
            'project_title' => "This project create with the same name with above and should be failed"
        ])->assertJsonValidationErrors(['name']); 
    }

    public function test_it_required_project_title() {
        $this->seed(RolesTableSeeder::class); //rolesSeeder();  
        
        $user = factory(User::class)->create(); 
        $userQuery = new UserQuery($user); 
        $userQuery->syncRoleAsAdministrator(); 

        $userQuery->addProject(
            $project = factory(Project::class)->create()
        ); 
        $this->jsonAs($user, 'PATCH', "api/projects/{$project->id}")
            ->assertJsonValidationErrors(['project_title']); 
    }*/

    public function test_it_update_the_project() {
        $this->seed(RolesTableSeeder::class); //rolesSeeder();  
        
        $user = factory(User::class)->create(); 
        $userQuery = new UserQuery($user); 
        $userQuery->syncRoleAsAdministrator(); 

        $userQuery->addProject(
            $project = factory(Project::class)->create()
        ); 
        $this->jsonAs($user, 'PATCH', "api/projects/{$project->id}", $project = [
            'name' => 'PRJTEST001', 
            'project_title' => 'This is a project with name PRJTEST001', 
        ]);

        $this->assertDatabaseHas('projects', $project); 
    }

    public function test_it_returns_a_project_resources_when_created() {
        $this->seed(RolesTableSeeder::class); //rolesSeeder();  
        
        $user = factory(User::class)->create(); 
        $userQuery = new UserQuery($user); 
        $userQuery->syncRoleAsAdministrator(); 

        $userQuery->addProject(
            $project = factory(Project::class)->create()
        ); 
        $response = $this->jsonAs($user, 'PATCH', "api/projects/{$project->id}", $project = [
            'name' => 'PRJTEST001', 
            'project_title' => 'This is a project with name PRJTEST001', 
        ]);

        $response->assertJsonFragment([
            'id' => json_decode($response->getContent())->data->id
        ]);
    }

    public function test_if_only_administrator_and_has_project_can_update_the_project() {
        $this->seed(RolesTableSeeder::class); //rolesSeeder(); 

        $user = factory(User::class)->create(); 
        $userQuery = new UserQuery($user); 
        $userQuery->syncRoleAsAdministrator(); 

        $project = factory(Project::class)->create(); 

        $this->jsonAs($user, 'PATCH', "api/projects/{$project->id}", $payload=[
            'name' => 'PRJTEST001', 
            'project_title' => 'This is a project with name PRJTEST001', 
        ])->assertStatus(403); //403 FORBIDDEN
    }
}
