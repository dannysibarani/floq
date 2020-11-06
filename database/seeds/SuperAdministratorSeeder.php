<?php

use Illuminate\Database\Seeder;

use App\Models\User; 
use App\Models\Role; 


class SuperAdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = $role = Role::where('name', 'SUPER_ADMINISTRATOR')->first(); 
        $superAdministrator = User::create([
            'name' => 'super', 
            'email' => 'super@administrator.com', 
            'password' => 'password', 
        ]); 
        
		$superAdministrator->roles()->attach($role); 
    }
}
