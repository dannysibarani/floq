<?php

use Illuminate\Database\Seeder;

use App\Models\User; 
use App\Models\Role; 


class SuperAdministratorCreateAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$userAdmin = User::where('name', 'danny')->first(); 
		$roleAdmin = Role::where('name', 'Administrator')->first(); 
        $userAdmin->roles()->detach(); 
		$userAdmin->roles()->save($roleAdmin); 
    }
}
