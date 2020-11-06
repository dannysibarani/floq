<?php

use Illuminate\Database\Seeder;

use App\Models\User; 
use App\Models\UserProfile; 

use App\Models\Enums\Sex; 
use App\Models\Enums\RelationshipStatus; 

class UserProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userAdministrator = User::where('email', 'danny@bankmandiri.com')->first(); 
        $userAdministrator->profile()->save(
        	UserProfile::create([
        		'user_id' => $userAdministrator->id, 
				'first_name' => 'Danny', 
				'middle_name' => 'Adil', 
				'last_name' => 'Sibarani', 
				'date_of_birth' => '1980-08-18 00:00:00', 
				'place_of_birth' => 'Pematangsiantar', 
				'nationality' => 'Indonesia', 
				'sex' => Sex::MALE, 
				'relationship_status' => RelationshipStatus::SINGLE, 
				'avatar' => 'avatars/Portrait_Placeholder.png', 
        	])
        ); 

        $userEndUserRepresentative = User::where('email', 'Palti.Hutapea@bankmandiri.com')->first();  
        $userEndUserRepresentative->profile()->save(
        	UserProfile::create([
        		'user_id' => $userEndUserRepresentative->id, 
				'first_name' => 'Palti', 
				'middle_name' => '', 
				'last_name' => 'Hutapea', 
				'date_of_birth' => '1970-07-01 00:00:00', 
				'place_of_birth' => 'Jakarta', 
				'nationality' => 'Indonesia', 
				'sex' => Sex::MALE, 
				'relationship_status' => RelationshipStatus::MARRIED, 
				'avatar' => 'avatars/Portrait_Placeholder.png', 
        	])
        ); 

        $userProjectSponsor = User::where('email', 'Lukman.Hakim@bankmandiri.com')->first(); 
        $userProjectSponsor->profile()->save(
        	UserProfile::create([
        		'user_id' => $userProjectSponsor->id, 
				'first_name' => 'Lukman', 
				'middle_name' => '', 
				'last_name' => 'Hakim', 
				'date_of_birth' => '1980-08-18 00:00:00', 
				'place_of_birth' => 'Kalimantan', 
				'nationality' => 'Indonesia', 
				'sex' => Sex::MALE, 
				'relationship_status' => RelationshipStatus::SINGLE, 
				'avatar' => 'avatars/Portrait_Placeholder.png', 
        	])
        ); 

        $userProjectCustomer = User::where('email', 'Ronny.Pryadi.Ismaya@bankmandiri.com')->first(); 
        $userProjectCustomer->profile()->save(
        	UserProfile::create([
        		'user_id' => $userProjectCustomer->id, 
				'first_name' => 'Ronny', 
				'middle_name' => 'Pryadi', 
				'last_name' => 'Ismaya', 
				'date_of_birth' => '1990-09-18 00:00:00', 
				'place_of_birth' => 'Semarang', 
				'nationality' => 'Indonesia', 
				'sex' => Sex::MALE, 
				'relationship_status' => RelationshipStatus::UNSPECIFIED, 
				'avatar' => 'avatars/Portrait_Placeholder.png', 
        	])
        ); 

        $userProjectOwner = User::where('email', 'Probosuwarto@bankmandiri.com')->first(); 
        $userProjectOwner->profile()->save(
        	UserProfile::create([
        		'user_id' => $userProjectOwner->id, 
				'first_name' => 'Probosuwarto', 
				'middle_name' => '', 
				'last_name' => '', 
				'date_of_birth' => '1985-01-12 00:00:00', 
				'place_of_birth' => 'Surabaya', 
				'nationality' => 'Indonesia', 
				'sex' => Sex::MALE, 
				'relationship_status' => RelationshipStatus::MARRIED, 
				'avatar' => 'avatars/Portrait_Placeholder.png', 
        	])
        ); 

        $userHeadOfITApplicationDevelopment = User::where('email', 'Bambang.Saptono@bankmandiri.com')->first(); 
        $userHeadOfITApplicationDevelopment->profile()->save(
        	UserProfile::create([
        		'user_id' => $userHeadOfITApplicationDevelopment->id, 
				'first_name' => 'Bambang', 
				'middle_name' => '', 
				'last_name' => 'Saptono', 
				'date_of_birth' => '1981-10-07 00:00:00', 
				'place_of_birth' => 'Purbolinggo', 
				'nationality' => 'Indonesia', 
				'sex' => Sex::MALE, 
				'relationship_status' => RelationshipStatus::MARRIED, 
				'avatar' => 'avatars/Portrait_Placeholder.png', 
        	])
        ); 

        $userHeadOfOperation = User::where('email', 'Asep.Supriatna@bankmandiri.com')->first();     
        $userHeadOfOperation->profile()->save(
        	UserProfile::create([
        		'user_id' => $userHeadOfOperation->id, 
				'first_name' => 'Asep', 
				'middle_name' => '', 
				'last_name' => 'Supriatna', 
				'date_of_birth' => '1979-05-03 00:00:00', 
				'place_of_birth' => 'Bandung', 
				'nationality' => 'Indonesia', 
				'sex' => Sex::MALE, 
				'relationship_status' => RelationshipStatus::MARRIED, 
				'avatar' => 'avatars/Portrait_Placeholder.png', 
        	])
        ); 

        $userProjectManager = User::where('email', 'Moh.Dwiki.Argawinata@bankmandiri.com')->first();   
        $userProjectManager->profile()->save(
        	UserProfile::create([
        		'user_id' => $userProjectManager->id, 
				'first_name' => 'Moh', 
				'middle_name' => 'Dwiki', 
				'last_name' => 'Argawinata', 
				'date_of_birth' => '1987-04-18 00:00:00', 
				'place_of_birth' => 'Jakarta', 
				'nationality' => 'Indonesia', 
				'sex' => Sex::MALE, 
				'relationship_status' => RelationshipStatus::UNSPECIFIED, 
				'avatar' => 'avatars/Portrait_Placeholder.png', 
        	])
        ); 

        $userOthers = User::where('email', 'Andi.Budi@MPT.com')->first();  
        $userOthers->profile()->save(
        	UserProfile::create([
        		'user_id' => $userOthers->id, 
				'first_name' => 'Andi', 
				'middle_name' => '', 
				'last_name' => 'Budi', 
				'date_of_birth' => '1989-02-17 00:00:00', 
				'place_of_birth' => 'Makassar', 
				'nationality' => 'Indonesia', 
				'sex' => Sex::MALE, 
				'relationship_status' => RelationshipStatus::SINGLE, 
				'avatar' => '~/static/avatars/Portrait_Placeholder.png', 
        	])
        ); 
    }
}



