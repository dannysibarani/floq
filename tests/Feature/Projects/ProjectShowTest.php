<?php

namespace Tests\Feature\Projects;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\User; 
use App\Models\Project; 


class ProjectShowTest extends TestCase
{
    public function test_it_fails_if_unauthenticated()
    {
        $user = factory(User::class)->create(); 
        $user->projects()->save(
            $project = factory(Project::class)->create()
        );

        $this->json('GET', 'api/projects/{$project->id}')
            ->assertStatus(401); //unauthenticated; 404 not found
    }

    public function test_it_fails_if_a_project_cant_be_found() {
        $user = factory(User::class)->create(); 

        $this->jsonAs($user, 'GET', "api/projects/nope")
            ->assertStatus(404); 
    }

    public function test_user_can_see_the_project_assigned_to_him() {
        $user = factory(User::class)->create(); 

        $project1 = factory(Project::class)->create(); 
        $project2 = factory(Project::class)->create(); 

        $user->projects()->attach($project1);

        $response = $this->jsonAs($user, 'GET', "api/projects/{$project1->id}"); 

        $response->assertJsonFragment([
            'name' => $project1->name, 
        ]); 
    }

    public function test_user_cannot_see_the_project_that_not_assigned_to_him() {
        $user = factory(User::class)->create(); 

        $project1 = factory(Project::class)->create(); 
        $project2 = factory(Project::class)->create(); 

        $user->projects()->attach($project1);

        $this->jsonAs($user, 'GET', "api/projects/{$project2->id}")
            ->assertStatus(403); //403 FORBIDDEN
    }
}