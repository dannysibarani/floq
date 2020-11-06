<?php

namespace Tests\Feature\ProjectCharters;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectCharterShowTest extends TestCase
{
    /**AUTHENTICATION & AUTHORIZATION**/
    //test_it_fails_if_unauthenticated
    //test_if_user_only_see_the_project_charter_that_assigned_to_him ??? or only project manager
    //test_if_project_manager_can_create_project_charter
    //test_if_project_manager_can_update_project_charter
    //test_if_not_project_manager_than_cant_create_project_charter
    //test_if_not_project_manager_than_cant_update_project_charter

    /**RELATIONSHIP**/
    //test_it_must_load_project_relation
    //test_it_must_load_posc_relation
    //test_it_must_load_schedule_relation
    //test_it_must_load_authority_relation
    //test_it_must_load_approvals_relation

    /**REQUEST**/
    //test_request_failed_with_status_code_500_if_no_or_out_of_range_request_key //=> `project-charters/nope`

    /**MAKE SURE**/
    //test_if_project_stakeholders_not_include_administrator_and_super_administrator
    //test_if_project_manager_can_approved_project_charter
    //test_if_project_sponsor_can_approved_project_charter
    //test_if_not_project_manager_or_project_sponsor_than_cant_approve_project_charter

    public function test_it_fails_if_unauthenticated()
    {
        $this->json('GET', 'api/project-charters')
            ->assertStatus(401); //unauthenticated
    }
}


