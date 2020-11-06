<?php

use Illuminate\Database\Seeder;

use App\Models\User; 
use App\Models\Corporation; 

class CorporationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$corporation = Corporation::create(['name' => 'Bank Mandiri']); 

        $userAdministrator = User::where('email', 'danny@bankmandiri.com')->first(); 
        $userAdministrator->corporations()->save($corporation); 

        $userEndUserRepresentative = User::where('email', 'Palti.Hutapea@bankmandiri.com')->first(); 
        $userEndUserRepresentative->corporations()->save($corporation);  

        $userProjectSponsor = User::where('email', 'Lukman.Hakim@bankmandiri.com')->first(); 
        $userProjectSponsor->corporations()->save($corporation);

        $userProjectCustomer = User::where('email', 'Ronny.Pryadi.Ismaya@bankmandiri.com')->first();  
        $userProjectCustomer->corporations()->save($corporation);

        $userProjectOwner = User::where('email', 'Probosuwarto@bankmandiri.com')->first(); 
        $userProjectOwner->corporations()->save($corporation);

        $userHeadOfITApplicationDevelopment = User::where('email', 'Bambang.Saptono@bankmandiri.com')->first();  
        $userHeadOfITApplicationDevelopment->corporations()->save($corporation);

        $userHeadOfOperation = User::where('email', 'Asep.Supriatna@bankmandiri.com')->first();     
        $userHeadOfOperation->corporations()->save($corporation);

        $userProjectManager = User::where('email', 'Moh.Dwiki.Argawinata@bankmandiri.com')->first();  
        $userProjectManager->corporations()->save($corporation);

        $user = User::where('email', 'Gunawan@bankmandiri.com')->first();  
        $user->corporations()->save($corporation);

        $userOthers = User::where('email', 'Andi.Budi@MPT.com')->first();   
        $userOthers->corporations()->save(
            Corporation::create(['name' => 'MPT'])
        );
    }
}
