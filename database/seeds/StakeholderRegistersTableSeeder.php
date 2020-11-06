<?php

use Illuminate\Database\Seeder;

use App\Models\Project; 
use App\Models\StakeholderRegister; 
use App\Models\Enums\StakeholderClassification; 

class StakeholderRegistersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$project = Project::where('name', 'PIAMSBBFP')->first(); 
		$users = $project->users()->get(); 

		$user = $users->where('name', 'Palti Hutapea')->first(); 
		$projectRole = $user->projectRoles()->first(); 
			StakeholderRegister::create([
				'project_id' => $project->id, 
				'user_id' => $user->id, 
				'project_role_id' => $projectRole->id, 
				'requirements' => 'Penggunaan aplikasi mudah dan tampilan menarik', 
				'expectation' => 'Ada kesan profesional dan modern', 
				'classification' => StakeholderClassification::HIGH, 
			]);

		$user = $users->where('name', 'Lukman Hakim')->first(); 
		$projectRole = $user->projectRoles()->first(); 
			StakeholderRegister::create([
				'project_id' => $project->id, 
				'user_id' => $user->id, 
				'project_role_id' => $projectRole->id, 
				'requirements' => 'Launching sebelum 31-Desember-2019', 
				'expectation' => 'Launching bertepatan dengan tahun baru', 
				'classification' => StakeholderClassification::HIGH, 
			]); 

		$user = $users->where('name', 'Ronny Pryadi Ismaya')->first(); 
		$projectRole = $user->projectRoles()->first(); 
			StakeholderRegister::create([
				'project_id' => $project->id, 
				'user_id' => $user->id, 
				'project_role_id' => $projectRole->id, 
				'requirements' => 'Terintegrasi dengan baik dengan Facebook Page Mandiri. Layanan nasabah perorangan yang sudah ada di Mandiri Online semaksimal mungkin ada pada aplikasi ini', 
				'expectation' => 'Kedepannya aplikasi ini bisa diupgrade dengan layanan tambahan seperti penjualan konten digital dan pembayaran layanan yang lebih banyak lagi seperti pembayaran listrik, telepon, pulsa listrik, air, kartu kredit, dsb.', 
				'classification' => StakeholderClassification::HIGH, 
			]); 

		$user = $users->where('name', 'Probosuwarto')->first(); 
		$projectRole = $user->projectRoles()->first(); 
			StakeholderRegister::create([
				'project_id' => $project->id, 
				'user_id' => $user->id, 
				'project_role_id' => $projectRole->id, 
				'requirements' => 'Peningkatan fungsi layanan yang lebih advance bisa dilakukan dengan mudah (addons)', 
				'expectation' => 'Aplikasi ini bisa menjadi diversifikasi kanal akses dari layanan bank Mandiri seperti yang sudah ada dalam web site Mandiri sekaligus untuk meningkatkan enggagement dengan custmer', 
				'classification' => StakeholderClassification::HIGH,
			]); 	

		$user = $users->where('name', 'Bambang Saptono')->first(); 
		$projectRole = $user->projectRoles()->first(); 
			StakeholderRegister::create([
				'project_id' => $project->id, 
				'user_id' => $user->id, 
				'project_role_id' => $projectRole->id, 
				'requirements' => 'Penggunaan vendor IT dan programmer yang sudah ada', 
				'expectation' => 'Fitur-fitur tambahan yang diiprioritaskan bisa beroperasi saat launching pertama kali', 
				'classification' => StakeholderClassification::MEDIUM, 
			]); 	

		$user = $users->where('name', 'Asep Supriatna')->first(); 
		$projectRole = $user->projectRoles()->first(); 
			StakeholderRegister::create([
				'project_id' => $project->id, 
				'user_id' => $user->id, 
				'project_role_id' => $projectRole->id, 
				'requirements' => 'Menggunakan infrastruktur yang sudah ada dengan penambahan yang minimal', 
				'expectation' => 'Pengoperasian dan perawatan yang mudah dan murah dengan tetap mengutamaka faktor keamanan sistem', 
				'classification' => StakeholderClassification::MEDIUM, 
			]); 
    }
}
