<?php

namespace Tests\Feature\StakeholderAnalyses;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StakeholderAnalysisIndexTest extends TestCase
{
    /**AUTHENTICATION & AUTHORIZATION**/
    //test_it_fails_if_unauthenticated
    //test_if_user_only_see_the_stakeholder_analysis_list_that_assigned_to_him
    //test_if_project_manager_can_create_stakeholder_analysis
    //test_if_project_manager_can_update_stakeholder_analysis
    //test_if_not_project_manager_than_cant_create_stakeholder_analysis
    //test_if_not_project_manager_than_cant_update_stakeholder_analysis

    /**RELATIONSHIP**/
    //test_it_must_load_stakeholderAnalyses_relation
    //test_it_must_load_stakeholderAnalyses_user_relation
    //test_it_must_load_stakeholderAnalyses_projectRole_relation

    /**REQUEST**/
    //test_if_request_key_must_be_project //=> `stakeholder-registers?project=1`
    //test_request_failed_with_status_code_500_if_no_or_out_of_range_request_key //=> `stakeholder-registers`  //=> `stakeholder-registers?projects=1`  //=> `stakeholder-registers?project=outofrange`

    public function test_it_fails_if_unauthenticated()
    {
        $this->json('GET', 'api/stakeholder-analyses')
            ->assertStatus(401); //unauthenticated
    }
}
