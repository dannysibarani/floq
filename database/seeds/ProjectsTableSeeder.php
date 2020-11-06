<?php

use Illuminate\Database\Seeder;

use App\Models\Project; 
use App\Models\User; 


class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('name', 'danny')->first(); //Administrator user
        $user->projects()->attach(
            Project::create([
                'date_prepared' => '2019-07-18 20:06:49', 
                'name' => 'PIAMSBBFP', 
                'project_title' =>'Pengembangan dan Implementasi Aplikasi Mandiri Social Banking Berbasis Facebook Page', 
            ])
        );
    }
}
