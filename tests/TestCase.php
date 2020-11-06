<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Foundation\Testing\RefreshDatabase; 


use Tymon\JWTAuth\Contracts\JWTSubject; 

use App\Models\Role; 


abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, RefreshDatabase;

    public function jsonAs(JWTSubject $user, $method, $endpoint, $data=[], $header=[]) {
    	$token = auth()->tokenById($user->id); 

    	return $this->json($method, $endpoint, $data, array_merge($header, [
    		'Authorization' => 'Bearer ' . $token, 
    	])); 
    }

    /*public function rolesSeeder() {
        Role::create(
            [
                'name' => 'SUPER_ADMINISTRATOR', 
                'description' => 'Super Administrator', 
            ]
        );

        Role::create(
            [
                'name' => 'ADMINISTRATOR', 
                'description' => 'Administrator', 
            ]
        );
        Role::create(
            [
                'name' => 'MEMBER', 
                'description' => 'Member', 
            ]
        );
    }*/
}
