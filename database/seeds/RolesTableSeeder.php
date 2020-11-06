<?php

use Illuminate\Database\Seeder;

use App\Models\Role; 


class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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

    }
}
