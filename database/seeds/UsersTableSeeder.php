<?php

use Illuminate\Database\Seeder;

use App\Models\User; 
use App\Models\Role; 


class UsersTableSeeder extends Seeder
{

    public function run()
    {
        $role = Role::where('name', 'MEMBER')->first(); 

        $userAdministrator = User::create([
            'name' => 'danny', 
            'email' => 'danny@bankmandiri.com', 
            'password' => 'password', 
        ]); 
        $userAdministrator->roles()->save($role); 

        $userEndUserRepresentative = User::create([
            'name' => 'Palti Hutapea', 
            'email' => 'Palti.Hutapea@bankmandiri.com', 
            'password' => 'password', 
        ]); 
        $userEndUserRepresentative->roles()->save($role); 

        $userProjectSponsor = User::create([
            'name' => 'Lukman Hakim', 
            'email' => 'Lukman.Hakim@bankmandiri.com', 
            'password' => 'password', 
        ]); 
        $userProjectSponsor->roles()->save($role);

        $userProjectCustomer = User::create([
            'name' => 'Ronny Pryadi Ismaya', 
            'email' => 'Ronny.Pryadi.Ismaya@bankmandiri.com', 
            'password' => 'password', 
        ]); 
        $userProjectCustomer->roles()->save($role);

        $userProjectOwner = User::create([
            'name' => 'Probosuwarto', 
            'email' => 'Probosuwarto@bankmandiri.com', 
            'password' => 'password', 
        ]); 
        $userProjectOwner->roles()->save($role);

        $userHeadOfITApplicationDevelopment = User::create([
            'name' => 'Bambang Saptono', 
            'email' => 'Bambang.Saptono@bankmandiri.com', 
            'password' => 'password', 
        ]); 
        $userHeadOfITApplicationDevelopment->roles()->save($role);

        $userHeadOfOperation = User::create([
            'name' => 'Asep Supriatna', 
            'email' => 'Asep.Supriatna@bankmandiri.com', 
            'password' => 'password', 
        ]);     
        $userHeadOfOperation->roles()->save($role);

        $userProjectManager = User::create([
            'name' => 'Moh Dwiki Argawinata', 
            'email' => 'Moh.Dwiki.Argawinata@bankmandiri.com',  
            'password' => 'password', 
        ]);  
        $userProjectManager->roles()->save($role);

        $user = User::create([
            'name' => 'Gunawan', 
            'email' => 'Gunawan@bankmandiri.com',  
            'password' => 'password', 
        ]);  
        $user->roles()->save($role);

        $userOthers = User::create([
            'name' => 'Andi Budi', 
            'email' => 'Andi.Budi@MPT.com',  
            'password' => 'password', 
        ]);  
        $userOthers->roles()->save($role);
    }
}