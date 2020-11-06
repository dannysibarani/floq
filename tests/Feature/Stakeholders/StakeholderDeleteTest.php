<?php

namespace Tests\Feature\Stakeholders;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\Project; 

class StakeholderDeleteTest extends TestCase
{
    public function test_it_fails_if_unauthenticated()
    {
        $project = factory(Project::class)->create(); 
        $projectRole = $project->projectRoles()->where('name', 'Project Manager'); 
        $this->json('DELETE', 'api/project-roles/{$projectRole->id}')
            ->assertStatus(401); //unauthenticated
        /*
            On default when create a project --> will create 4 default project roles --> see App\Models\Seeders\ProductRolesSeeder (implemented on the observer)
        */
    }
}
