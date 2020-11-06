<?php

use Illuminate\Database\Seeder;


use App\Models\Project; 
use App\Models\User; 



class ProjectUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$project = Project::where('name', 'PIAMSBBFP')->first(); 

		$user1 = User::where('email', 'Palti.Hutapea@bankmandiri.com')->first(); 
		$project->users()->attach($user1); 

		$user2 = User::where('email', 'Lukman.Hakim@bankmandiri.com')->first(); 
		$project->users()->attach($user2); 

		$user3 = User::where('email', 'Ronny.Pryadi.Ismaya@bankmandiri.com')->first(); 
		$project->users()->attach($user3); 

		$user4 = User::where('email', 'Probosuwarto@bankmandiri.com')->first(); 
		$project->users()->attach($user4); 

		$user5 = User::where('email', 'Bambang.Saptono@bankmandiri.com')->first(); 
		$project->users()->attach($user5); 

		$user6 = User::where('email', 'Asep.Supriatna@bankmandiri.com')->first(); 
		$project->users()->attach($user6); 

		$user7 = User::where('email', 'Moh.Dwiki.Argawinata@bankmandiri.com')->first(); 
		$project->users()->attach($user7); 
    }
}
