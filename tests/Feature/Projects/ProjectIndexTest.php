<?php

namespace Tests\Feature\Projects;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\Queries\UserQuery; 
use App\Models\Project; 
use App\Models\User; 


class ProjectIndexTest extends TestCase
{

    public function test_it_fails_if_unauthenticated()
    {
        $this->json('GET', 'api/projects')
            ->assertStatus(401); //unauthenticated
    }

    public function test_user_only_see_project_list_that_assigned_to_him() {
        $user = factory(User::class)->create(); 

        $project1 = factory(Project::class)->create(); 
        $project2 = factory(Project::class)->create(); 
        $project3 = factory(Project::class)->create(); 

        $user->projects()->attach($project1);
        $user->projects()->attach($project2); 

        $this->jsonAs($user, 'GET', "api/projects")
            ->assertJsonCount(2, 'data'); 
    }
}
