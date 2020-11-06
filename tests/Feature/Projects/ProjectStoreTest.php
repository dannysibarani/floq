<?php

namespace Tests\Feature\Projects;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\User; 
use App\Models\Project; 
//use App\Models\Role; 

use App\Models\Queries\UserQuery; 

use RolesTableSeeder; 


class ProjectStoreTest extends TestCase
{
    /*
    test_it_fails_if_unauthenticated
    test_it_required_date_prepared
    test_it_required_name
    test_it_has_unique_name
    test_it_required_project_title
    test_it_stores_the_project
    test_it_returns_a_project_resources_when_created
    test_if_only_administrator_can_create_the_project
    */
    public function test_it_fails_if_unauthenticated()
    {
        $this->json('POST', 'api/projects')
            ->assertStatus(401); //unauthenticated; 404 not found
    }

    public function test_it_required_date_prepared() {
        $this->seed(RolesTableSeeder::class); //rolesSeeder(); 

        $user = factory(User::class)->create(); 
        $userQuery = new UserQuery($user); 
        $userQuery->syncRoleAsAdministrator(); 
        $this->jsonAs($user, 'POST', 'api/projects', [])
            ->assertJsonValidationErrors(['date_prepared']); 
    }

    public function test_it_required_name() {
        $this->seed(RolesTableSeeder::class); //rolesSeeder(); 
        
        $user = factory(User::class)->create(); 
        $userQuery = new UserQuery($user); 
        $userQuery->syncRoleAsAdministrator(); 
        $this->jsonAs($user, 'POST', 'api/projects')
            ->assertJsonValidationErrors(['name']); 
    }

    public function test_it_has_unique_name() {
        $this->seed(RolesTableSeeder::class); //rolesSeeder();  

        //Create User with Administrator role
        $user = factory(User::class)->create(); 
        $userQuery = new UserQuery($user); 
        $userQuery->syncRoleAsAdministrator(); 

        //Create a project so we can check if the name must be unique
        $project = Project::create([
            'date_prepared' => '2019/08/18', 
            'name' => 'PRJTEST', 
            'project_title' => 'This project just to test', 
        ]); 

        //Create a second Project with same name with above project and the result should be error when request validation role because the name project_1 = project_2
        $this->jsonAs($user, 'POST', 'api/projects', $payload = [
            'date_prepared' => "2019/09/08", 
            'name' => 'PRJTEST', 
            'project_title' => "This project create with the same name with above and should be failed"
        ])->assertJsonValidationErrors(['name']); 
    }

    public function test_it_required_project_title() {
        $this->seed(RolesTableSeeder::class); //rolesSeeder();  
        
        $user = factory(User::class)->create(); 
        $userQuery = new UserQuery($user); 
        $userQuery->syncRoleAsAdministrator(); 
        $this->jsonAs($user, 'POST', 'api/projects')
            ->assertJsonValidationErrors(['project_title']); 
    }

    public function test_it_stores_the_project() {
        $this->seed(RolesTableSeeder::class); //rolesSeeder(); 
        
        $user = factory(User::class)->create(); 
        $userQuery = new UserQuery($user); 
        $userQuery->syncRoleAsAdministrator(); 
        $this->jsonAs($user, 'POST', 'api/projects', $project = [
            'date_prepared' => date("Y-m-d H:i:s"), 
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
        $response = $this->jsonAs($user, 'POST', 'api/projects', $project = [
            'date_prepared' => date("Y-m-d H:i:s"), 
            'name' => 'PRJTEST001', 
            'project_title' => 'This is a project with name PRJTEST001', 
        ]);

        $response->assertJsonFragment([
            'id' => json_decode($response->getContent())->data->id
        ]);
    }

    public function test_if_only_administrator_can_create_the_project() {
        $user = factory(User::class)->create(); 
        $project = factory(Project::class)->create(); 

        $this->jsonAs($user, 'POST', "api/projects", $payload=[
            'date_prepared' => $project->date_prepared, 
            'name' => $project->name, 
            'project_title' => $project->project_title, 
        ])->assertStatus(403); //403 FORBIDDEN
    }
}