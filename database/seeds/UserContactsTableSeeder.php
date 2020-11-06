<?php

use Illuminate\Database\Seeder;


use App\Models\User; 
use App\Models\UserContact; 

use App\Models\Enums\PhoneType; 
use App\Models\Enums\PhoneStatus; 


class UserContactsTableSeeder extends Seeder
{
    public function run()
    {

        $userAdministrator = User::where('email', 'danny@bankmandiri.com')->first(); 
        $userAdministrator->contacts()->save(
        	UserContact::create([
        		'user_id' => $userAdministrator->id, 
				'phone_number' => '08134885859593', 
				'phone_type' => PhoneType::WORK, 
				'phone_status' => PhoneStatus::ACTIVE, 
        	])
        ); 
        $userAdministrator->contacts()->save(
        	UserContact::create([
        		'user_id' => $userAdministrator->id, 
				'phone_number' => '0819191919191', 
				'phone_type' => PhoneType::CELL, 
				'phone_status' => PhoneStatus::ACTIVE, 
        	])
        ); 
        $userAdministrator->contacts()->save(
        	UserContact::create([
        		'user_id' => $userAdministrator->id, 
				'phone_number' => '081288868475775', 
				'phone_type' => PhoneType::WORK, 
				'phone_status' => PhoneStatus::INACTIVE, 
        	])
        ); 

        $userEndUserRepresentative = User::where('email', 'Palti.Hutapea@bankmandiri.com')->first();  
        $userEndUserRepresentative->contacts()->save(
        	UserContact::create([
        		'user_id' => $userEndUserRepresentative->id, 
				'phone_number' => '0819348483943', 
				'phone_type' => PhoneType::CELL, 
				'phone_status' => PhoneStatus::ACTIVE, 
        	])
        ); 

        $userProjectSponsor = User::where('email', 'Lukman.Hakim@bankmandiri.com')->first(); 
        $userProjectSponsor->contacts()->save(
        	UserContact::create([
        		'user_id' => $userProjectSponsor->id, 
				'phone_number' => '081739393904930', 
				'phone_type' => PhoneType::HOME, 
				'phone_status' => PhoneStatus::ACTIVE,  
        	])
        ); 

        $userProjectCustomer = User::where('email', 'Ronny.Pryadi.Ismaya@bankmandiri.com')->first(); 
        $userProjectCustomer->contacts()->save(
        	UserContact::create([
        		'user_id' => $userProjectCustomer->id, 
				'phone_number' => '0812395995999', 
				'phone_type' => PhoneType::WORK, 
				'phone_status' => PhoneStatus::INACTIVE, 
        	])
        ); 

        $userProjectOwner = User::where('email', 'Probosuwarto@bankmandiri.com')->first(); 
        $userProjectOwner->contacts()->save(
        	UserContact::create([
        		'user_id' => $userProjectOwner->id, 
				'phone_number' => '0818394959599', 
				'phone_type' => PhoneType::WORK, 
				'phone_status' => PhoneStatus::ACTIVE, 
        	])
        ); 

        $userHeadOfITApplicationDevelopment = User::where('email', 'Bambang.Saptono@bankmandiri.com')->first(); 
        $userHeadOfITApplicationDevelopment->contacts()->save(
        	UserContact::create([
        		'user_id' => $userHeadOfITApplicationDevelopment->id, 
				'phone_number' => '0812447774374', 
				'phone_type' => PhoneType::WORK, 
				'phone_status' => PhoneStatus::ACTIVE, 
        	])
        ); 

        $userHeadOfOperation = User::where('email', 'Asep.Supriatna@bankmandiri.com')->first();     
        $userHeadOfOperation->contacts()->save(
        	UserContact::create([
        		'user_id' => $userHeadOfOperation->id, 
				'phone_number' => '08173838388888', 
				'phone_type' => PhoneType::WORK, 
				'phone_status' => PhoneStatus::ACTIVE, 
        	])
        ); 

        $userProjectManager = User::where('email', 'Moh.Dwiki.Argawinata@bankmandiri.com')->first();   
        $userProjectManager->contacts()->save(
        	UserContact::create([
        		'user_id' => $userProjectManager->id, 
				'phone_number' => '081233563345', 
				'phone_type' => PhoneType::WORK, 
				'phone_status' => PhoneStatus::ACTIVE, 
        	])
        ); 

        $userOthers = User::where('email', 'Andi.Budi@MPT.com')->first();  
        $userOthers->contacts()->save(
        	UserContact::create([
        		'user_id' => $userOthers->id, 
				'phone_number' => '08132223332233', 
				'phone_type' => PhoneType::WORK, 
				'phone_status' => PhoneStatus::ACTIVE, 
        	])
        ); 

    }
}
