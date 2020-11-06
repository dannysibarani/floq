<?php

namespace Tests\Feature\Stakeholders;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StakeholderStoreTest extends TestCase
{
    public function test_it_fails_if_unauthenticated()
    {
        $this->json('POST', 'api/stakeholders')
            ->assertStatus(401); //unauthenticated
    }
}
