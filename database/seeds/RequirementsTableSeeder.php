<?php

use Illuminate\Database\Seeder;

use App\Models\Project; 
use App\Models\Requirement\RequirementVerification; 
use App\Models\Requirement\RequirementCategory; 
use App\Models\Requirement\RequirementPhase; 
use App\Models\Requirement\RequirementPriority; 
use App\Models\Requirement\Requirement; 

use App\Models\User; 
use App\Models\ProjectRole; 

class RequirementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$project = Project::where('name', 'PIAMSBBFP')->first(); 

		$user = User::where('name', 'Palti Hutapea')->first(); 
		$users = $project->users()->get(); 
		$projectRole = $users->find($user->id)->projectRoles()->first(); 
		$category = RequirementCategory::where('name', 'TECHNICAL')->first(); 
		$priority = RequirementPriority::where('name', 'LEVEL_1')->first();  
		$phase = RequirementPhase::where('name', 'FIRST_RELEASE')->first(); 
		$reqDoc = Requirement::create([
			'project_id' => $project->id, 
			'user_id' => $user->id, 
			'project_role_id' => $projectRole->id, 
			'sid' => 'R001', 
			'requirements' => 'Halaman antar muka untuk pelanggan dibuat serderhana dan clean. Gunakan warna korporat Mandiri', 
			'requirement_category_id' => $category->id, 
			'requirement_priority_id' => $priority->id, 
			'requirement_phase_id' => $phase->id, 
			'acceptance_criteria' => 'Aplikasi memenuhi requirements ini', 
		]); 
		$verification = RequirementVerification::where('name', 'INSPECTION')->first();
		$reqDoc->verifications()->attach($verification); 

		$user = User::where('name', 'Palti Hutapea')->first(); 
		$users = $project->users()->get(); 
		$projectRole = $users->find($user->id)->projectRoles()->first(); 
		$category = RequirementCategory::where('name', 'TECHNICAL')->first(); 
		$priority = RequirementPriority::where('name', 'LEVEL_1')->first();  
		$phase = RequirementPhase::where('name', 'FIRST_RELEASE')->first(); 
		$reqDoc = Requirement::create([
			'project_id' => $project->id, 
			'user_id' => $user->id, 
			'project_role_id' => $projectRole->id, 
			'sid' => 'R002', 
			'requirements' => 'Nama-nama layanan dikelompokkan dalam menu yang sesuai', 
			'requirement_category_id' => $category->id, 
			'requirement_priority_id' => $priority->id, 
			'requirement_phase_id' => $phase->id, 
			'acceptance_criteria' => 'Ada relevansi antara nama layanan dengan isi layanan', 
		]); 
		$verification = RequirementVerification::where('name', 'INSPECTION')->first();
		$reqDoc->verifications()->attach($verification); 

		$user = User::where('name', 'Palti Hutapea')->first(); 
		$users = $project->users()->get(); 
		$projectRole = $users->find($user->id)->projectRoles()->first(); 
		$category = RequirementCategory::where('name', 'TECHNICAL')->first(); 
		$priority = RequirementPriority::where('name', 'LEVEL_2')->first(); 
		$phase = RequirementPhase::where('name', 'FIRST_RELEASE')->first(); 
		$reqDoc = Requirement::create([
			'project_id' => $project->id, 
			'user_id' => $user->id, 
			'project_role_id' => $projectRole->id, 
			'sid' => 'R003', 
			'requirements' => 'Jika dibutuhkan pengisian form memporses tiap layanan yang diinginkan, hanya diproses dengan satu halaman form', 
			'requirement_category_id' => $category->id, 
			'requirement_priority_id' => $priority->id, 
			'requirement_phase_id' => $phase->id, 
			'acceptance_criteria' => 'Isian form hanya dilakukan satu kali untuk tiap penggunaan layanan', 
		]); 
		$verification = RequirementVerification::where('name', 'TEST')->first(); 
		$reqDoc->verifications()->attach($verification);

		$user = User::where('name', 'Lukman Hakim')->first(); 
		$users = $project->users()->get(); 
		$projectRole = $users->find($user->id)->projectRoles()->first(); 
		$category = RequirementCategory::where('name', 'NONFUNCTIONAL')->first(); 
		$priority = RequirementPriority::where('name', 'LEVEL_1')->first();  
		$phase = RequirementPhase::where('name', 'FIRST_RELEASE')->first(); 
		$reqDoc = Requirement::create([
			'project_id' => $project->id, 
			'user_id' => $user->id, 
			'project_role_id' => $projectRole->id, 
			'sid' => 'R004', 
			'requirements' => 'Perencanaan proyek dan dokumentasinya diselesaikan bulan Juli 2019', 
			'requirement_category_id' => $category->id, 
			'requirement_priority_id' => $priority->id, 
			'requirement_phase_id' => $phase->id, 
			'acceptance_criteria' => 'Dokumen perencanaan proyek sudah mendapat persetujuanir Juli 2019', 
		]); 
		$verification = RequirementVerification::where('name', 'INSPECTION')->first();
		$reqDoc->verifications()->attach($verification);

		$user = User::where('name', 'Lukman Hakim')->first(); 
		$users = $project->users()->get(); 
		$projectRole = $users->find($user->id)->projectRoles()->first(); 
		$category = RequirementCategory::where('name', 'NONFUNCTIONAL')->first(); 
		$priority = RequirementPriority::where('name', 'LEVEL_2')->first();  
		$phase = RequirementPhase::where('name', 'FIRST_RELEASE')->first(); 
		$reqDoc = Requirement::create([
			'project_id' => $project->id, 
			'user_id' => $user->id, 
			'project_role_id' => $projectRole->id, 
			'sid' => 'R005', 
			'requirements' => 'Dilakukan soft launch untuk evaluasi internal di tengah Desember 2019', 
			'requirement_category_id' => $category->id, 
			'requirement_priority_id' => $priority->id, 
			'requirement_phase_id' => $phase->id, 
			'acceptance_criteria' => 'Soft launching dilakukan sebelum 15 Desember 2019', 
		]); 
		$verification = RequirementVerification::where('name', 'DEMONSTRATION')->first();
		$reqDoc->verifications()->attach($verification);

		$user = User::where('name', 'Lukman Hakim')->first(); 
		$users = $project->users()->get(); 
		$projectRole = $users->find($user->id)->projectRoles()->first(); 
		$category = RequirementCategory::where('name', 'NONFUNCTIONAL')->first(); 
		$priority = RequirementPriority::where('name', 'LEVEL_1')->first();  
		$phase = RequirementPhase::where('name', 'FIRST_RELEASE')->first(); 
		$reqDoc = Requirement::create([
			'project_id' => $project->id, 
			'user_id' => $user->id, 
			'project_role_id' => $projectRole->id, 
			'sid' => 'R006', 
			'requirements' => 'Launching sebelum 31-Desember-2019 bertepatan dengan event Tahun Baru 2020', 
			'requirement_category_id' => $category->id, 
			'requirement_priority_id' => $priority->id, 
			'requirement_phase_id' => $phase->id, 
			'acceptance_criteria' => 'Launching dilakukan sebelum max. 31 Desember 2019', 
		]); 
		$verification = RequirementVerification::where('name', 'DEMONSTRATION')->first();
		$reqDoc->verifications()->attach($verification);

		$user = User::where('name', 'Ronny Pryadi Ismaya')->first(); 
		$users = $project->users()->get(); 
		$projectRole = $users->find($user->id)->projectRoles()->first(); 
		$category = RequirementCategory::where('name', 'TECHNICAL')->first(); 
		$priority = RequirementPriority::where('name', 'LEVEL_1')->first();  
		$phase = RequirementPhase::where('name', 'FIRST_RELEASE')->first(); 
		$reqDoc = Requirement::create([
			'project_id' => $project->id, 
			'user_id' => $user->id, 
			'project_role_id' => $projectRole->id, 
			'sid' => 'R007', 
			'requirements' => 'Aplikasi ini menjadi satu halaman dengan Mandiri Facebook Page (web.facebook.com/bankmandiri)', 
			'requirement_category_id' => $category->id, 
			'requirement_priority_id' => $priority->id, 
			'requirement_phase_id' => $phase->id, 
			'acceptance_criteria' => 'Sesuai requirement', 
		]); 
		$verification = RequirementVerification::where('name', 'DEMONSTRATION')->first();
		$reqDoc->verifications()->attach($verification);

		$user = User::where('name', 'Ronny Pryadi Ismaya')->first(); 
		$users = $project->users()->get(); 
		$projectRole = $users->find($user->id)->projectRoles()->first(); 
		$category = RequirementCategory::where('name', 'FUNCTIONAL')->first(); 
		$priority = RequirementPriority::where('name', 'LEVEL_1')->first();  
		$phase = RequirementPhase::where('name', 'FIRST_RELEASE')->first(); 
		$reqDoc = Requirement::create([
			'project_id' => $project->id, 
			'user_id' => $user->id, 
			'project_role_id' => $projectRole->id, 
			'sid' => 'R008', 
			'requirements' => 'Layanan dasar dari aplikasi ini adalah:  Online Account Opening  View Balance Account / Last Transactions  Money Transfer  Bills Payment  Credit Card Application  Investation & Insurance Layanan tambahan dari aplikasi ini adalah Video Banking dengan fitur sbb:  Account update  Account opening  Account reactivation  Bank statement requests  Token Request /Replacement  Mobile banking set-up  Pre-registration request  Login Details/ Password Reset  Other account enquiries, requests and complaints', 
			'requirement_category_id' => $category->id, 
			'requirement_priority_id' => $priority->id, 
			'requirement_phase_id' => $phase->id, 
			'acceptance_criteria' => '100% layanan dasar ada pada aplikasi dan bekerja dengan baik, 90% fitur dalam layanan tambahan ada pada aplikasi dan bekerja dengan baik', 
		]); 
		$verification = RequirementVerification::where('name', 'TEST')->first();
		$reqDoc->verifications()->attach($verification);
		$verification = RequirementVerification::where('name', 'ANALYSIS')->first();
		$reqDoc->verifications()->attach($verification);

		$user = User::where('name', 'Ronny Pryadi Ismaya')->first(); 
		$users = $project->users()->get(); 
		$projectRole = $users->find($user->id)->projectRoles()->first(); 
		$category = RequirementCategory::where('name', 'TECHNICAL')->first(); 
		$priority = RequirementPriority::where('name', 'LEVEL_3')->first();  
		$phase = RequirementPhase::where('name', 'FIRST_RELEASE')->first(); 
		$reqDoc = Requirement::create([
			'project_id' => $project->id, 
			'user_id' => $user->id, 
			'project_role_id' => $projectRole->id, 
			'sid' => 'R009', 
			'requirements' => 'Dokumentasi Lesson Learned dari proyek ini diharapkan disusun sedemikian rupa dapat digunakan untuk menjadi masukan dalam pengembangan lanjutan aplikasi Digital Marketplace atau eCommerce', 
			'requirement_category_id' => $category->id, 
			'requirement_priority_id' => $priority->id, 
			'requirement_phase_id' => $phase->id, 
			'acceptance_criteria' => 'Ada recommendation statement untuk pengembangan lanjutan untuk Digital Marketplace', 
		]); 
		$verification = RequirementVerification::where('name', 'ANALYSIS')->first();
		$reqDoc->verifications()->attach($verification); 

		$user = User::where('name', 'Probosuwarto')->first(); 
		$users = $project->users()->get(); 
		$projectRole = $users->find($user->id)->projectRoles()->first(); 
		$category = RequirementCategory::where('name', 'NONFUNCTIONAL')->first(); 
		$priority = RequirementPriority::where('name', 'LEVEL_1')->first();  
		$phase = RequirementPhase::where('name', 'FIRST_RELEASE')->first(); 
		$reqDoc = Requirement::create([
			'project_id' => $project->id, 
			'user_id' => $user->id, 
			'project_role_id' => $projectRole->id, 
			'sid' => 'R010', 
			'requirements' => 'Roadmap untuk aplikasi ini harus dibuat dengan mempertimbangkan release sampai dengan 3-5 tahun kedepan dengan mempertimbankan pencapaian bertingkat untuk enggament dengan nasabah', 
			'requirement_category_id' => $category->id, 
			'requirement_priority_id' => $priority->id, 
			'requirement_phase_id' => $phase->id, 
			'acceptance_criteria' => 'Strategi bertahap untuk peningkatan enggament kepada nasabah tercantum dalam dokumen roadmap', 
		]); 
		$verification = RequirementVerification::where('name', 'ANALYSIS')->first();
		$reqDoc->verifications()->attach($verification);

		$user = User::where('name', 'Probosuwarto')->first(); 
		$users = $project->users()->get(); 
		$projectRole = $users->find($user->id)->projectRoles()->first(); 
		$category = RequirementCategory::where('name', 'TECHNICAL')->first(); 
		$priority = RequirementPriority::where('name', 'LEVEL_1')->first();  
		$phase = RequirementPhase::where('name', 'FIRST_RELEASE')->first(); 
		$reqDoc = Requirement::create([
			'project_id' => $project->id, 
			'user_id' => $user->id, 
			'project_role_id' => $projectRole->id, 
			'sid' => 'R011', 
			'requirements' => 'Aplikasi ini harus mengakomodir penambahan layanan dan fitur baru kedepannya dengan proses yang sederhana, mudah dan cost effective', 
			'requirement_category_id' => $category->id, 
			'requirement_priority_id' => $priority->id, 
			'requirement_phase_id' => $phase->id, 
			'acceptance_criteria' => 'Desain dan implementasi source code, tampilan, dan database memungkinkan penambahan layanan atau fitur baru kedepannya', 
		]); 
		$verification = RequirementVerification::where('name', 'TEST')->first();
		$reqDoc->verifications()->attach($verification);
		$verification = RequirementVerification::where('name', 'ANALYSIS')->first();
		$reqDoc->verifications()->attach($verification);

		$user = User::where('name', 'Probosuwarto')->first(); 
		$users = $project->users()->get(); 
		$projectRole = $users->find($user->id)->projectRoles()->first(); 
		$category = RequirementCategory::where('name', 'NONFUNCTIONAL')->first(); 
		$priority = RequirementPriority::where('name', 'LEVEL_1')->first();  
		$phase = RequirementPhase::where('name', 'FIRST_RELEASE')->first(); 
		$reqDoc = Requirement::create([
			'project_id' => $project->id, 
			'user_id' => $user->id, 
			'project_role_id' => $projectRole->id, 
			'sid' => 'R012', 
			'requirements' => 'Perlu dilakukan verifikasi konsistensi semua fitur yang ada sejalan dengan layanan yang sudah ada di Website resmi Mandiri', 
			'requirement_category_id' => $category->id, 
			'requirement_priority_id' => $priority->id, 
			'requirement_phase_id' => $phase->id, 
			'acceptance_criteria' => 'Verifikasi yang dimaksud dilakukan dan didokumentasikan', 
		]); 
		$verification = RequirementVerification::where('name', 'TEST')->first();
		$reqDoc->verifications()->attach($verification);
		$verification = RequirementVerification::where('name', 'ANALYSIS')->first();
		$reqDoc->verifications()->attach($verification);

		$user = User::where('name', 'Bambang Saptono')->first(); 
		$users = $project->users()->get(); 
		$projectRole = $users->find($user->id)->projectRoles()->first(); 
		$category = RequirementCategory::where('name', 'NONFUNCTIONAL')->first(); 
		$priority = RequirementPriority::where('name', 'LEVEL_2')->first();  
		$phase = RequirementPhase::where('name', 'FIRST_RELEASE')->first(); 
		$reqDoc = Requirement::create([
			'project_id' => $project->id, 
			'user_id' => $user->id, 
			'project_role_id' => $projectRole->id, 
			'sid' => 'R013', 
			'requirements' => 'Diutamakan penggunaan resource IT dan developer internal dari Mandiri', 
			'requirement_category_id' => $category->id, 
			'requirement_priority_id' => $priority->id, 
			'requirement_phase_id' => $phase->id, 
			'acceptance_criteria' => 'Paling tidak 30% team IT dan developer dari internal Mandiri', 
		]); 
		$verification = RequirementVerification::where('name', 'INSPECTION')->first();
		$reqDoc->verifications()->attach($verification);

		$user = User::where('name', 'Bambang Saptono')->first(); 
		$users = $project->users()->get(); 
		$projectRole = $users->find($user->id)->projectRoles()->first(); 
		$category = RequirementCategory::where('name', 'TECHNICAL')->first(); 
		$priority = RequirementPriority::where('name', 'LEVEL_2')->first();  
		$phase = RequirementPhase::where('name', 'FIRST_RELEASE')->first(); 
		$reqDoc = Requirement::create([
			'project_id' => $project->id, 
			'user_id' => $user->id, 
			'project_role_id' => $projectRole->id, 
			'sid' => 'R014', 
			'requirements' => 'Desain dan implementasi dari back-end & front-end harus dibuat dengan mempertimbangkan penambahan fitur tambahan dan pembuatan source code harus mengikuti standard baku dari Team Developer Mandiri', 
			'requirement_category_id' => $category->id, 
			'requirement_priority_id' => $priority->id, 
			'requirement_phase_id' => $phase->id, 
			'acceptance_criteria' => 'Sesuai requirement', 
		]); 
		$verification = RequirementVerification::where('name', 'TEST')->first();
		$reqDoc->verifications()->attach($verification);
		$verification = RequirementVerification::where('name', 'ANALYSIS')->first();
		$reqDoc->verifications()->attach($verification);

		$user = User::where('name', 'Bambang Saptono')->first(); 
		$users = $project->users()->get(); 
		$projectRole = $users->find($user->id)->projectRoles()->first(); 
		$category = RequirementCategory::where('name', 'NONFUNCTIONAL')->first(); 
		$priority = RequirementPriority::where('name', 'LEVEL_2')->first();  
		$phase = RequirementPhase::where('name', 'FIRST_RELEASE')->first(); 
		$reqDoc = Requirement::create([
			'project_id' => $project->id, 
			'user_id' => $user->id, 
			'project_role_id' => $projectRole->id, 
			'sid' => 'R015', 
			'requirements' => 'Penggunaan vendor IT dan programmer yang sudah ada', 
			'requirement_category_id' => $category->id, 
			'requirement_priority_id' => $priority->id, 
			'requirement_phase_id' => $phase->id, 
			'acceptance_criteria' => 'Sesuai requirement', 
		]); 
		$verification = RequirementVerification::where('name', 'INSPECTION')->first();
		$reqDoc->verifications()->attach($verification);

		$user = User::where('name', 'Asep Supriatna')->first(); 
		$users = $project->users()->get(); 
		$projectRole = $users->find($user->id)->projectRoles()->first(); 
		$category = RequirementCategory::where('name', 'TECHNICAL')->first(); 
		$priority = RequirementPriority::where('name', 'LEVEL_1')->first();  
		$phase = RequirementPhase::where('name', 'FIRST_RELEASE')->first(); 
		$reqDoc = Requirement::create([
			'project_id' => $project->id, 
			'user_id' => $user->id, 
			'project_role_id' => $projectRole->id, 
			'sid' => 'R016', 
			'requirements' => 'Memanfaatkan server, connectivity dan supporting element lain yang sudah dimiliki oleh Mandiri', 
			'requirement_category_id' => $category->id, 
			'requirement_priority_id' => $priority->id, 
			'requirement_phase_id' => $phase->id, 
			'acceptance_criteria' => 'Paling tidak 50% requirement tersebut dipenuhi', 
		]); 
		$verification = RequirementVerification::where('name', 'INSPECTION')->first();
		$reqDoc->verifications()->attach($verification);

		$user = User::where('name', 'Asep Supriatna')->first(); 
		$users = $project->users()->get(); 
		$projectRole = $users->find($user->id)->projectRoles()->first(); 
		$category = RequirementCategory::where('name', 'TECHNICAL')->first(); 
		$priority = RequirementPriority::where('name', 'LEVEL_2')->first();  
		$phase = RequirementPhase::where('name', 'FIRST_RELEASE')->first(); 
		$reqDoc = Requirement::create([
			'project_id' => $project->id, 
			'user_id' => $user->id, 
			'project_role_id' => $projectRole->id, 
			'sid' => 'R017', 
			'requirements' => 'Dependensi terhadap segala perubahan dari Facebook harus diminimalisasi', 
			'requirement_category_id' => $category->id, 
			'requirement_priority_id' => $priority->id, 
			'requirement_phase_id' => $phase->id, 
			'acceptance_criteria' => 'Dokumentasi potensi dependensi dibuat dan diverifikasi oleh Team Operasi', 
		]); 
		$verification = RequirementVerification::where('name', 'INSPECTION')->first();
		$reqDoc->verifications()->attach($verification);
		$verification = RequirementVerification::where('name', 'ANALYSIS')->first();
		$reqDoc->verifications()->attach($verification);

		$user = User::where('name', 'Asep Supriatna')->first(); 
		$users = $project->users()->get(); 
		$projectRole = $users->find($user->id)->projectRoles()->first(); 
		$category = RequirementCategory::where('name', 'TECHNICAL')->first(); 
		$priority = RequirementPriority::where('name', 'LEVEL_1')->first();  
		$phase = RequirementPhase::where('name', 'FIRST_RELEASE')->first(); 
		$reqDoc = Requirement::create([
			'project_id' => $project->id, 
			'user_id' => $user->id, 
			'project_role_id' => $projectRole->id, 
			'sid' => 'R018', 
			'requirements' => 'Penggunaan keamanan berlapis seperti OTP yang dikirim lewat email atau SMS ke no telepon pengguna, pendaftaran menggunakan nomor kartu debit dan PIN, dan peneraoan limit transaksi harian.', 
			'requirement_category_id' => $category->id, 
			'requirement_priority_id' => $priority->id, 
			'requirement_phase_id' => $phase->id, 
			'acceptance_criteria' => 'Sesuai requirement', 
		]); 
		$verification = RequirementVerification::where('name', 'INSPECTION')->first();
		$reqDoc->verifications()->attach($verification);
		$verification = RequirementVerification::where('name', 'DEMONSTRATION')->first();
		$reqDoc->verifications()->attach($verification);

		$user = User::where('name', 'Asep Supriatna')->first(); 
		$users = $project->users()->get(); 
		$projectRole = $users->find($user->id)->projectRoles()->first(); 
		$category = RequirementCategory::where('name', 'TECHNICAL')->first(); 
		$priority = RequirementPriority::where('name', 'LEVEL_3')->first();  
		$phase = RequirementPhase::where('name', 'FIRST_RELEASE')->first(); 
		$reqDoc = Requirement::create([
			'project_id' => $project->id, 
			'user_id' => $user->id, 
			'project_role_id' => $projectRole->id, 
			'sid' => 'R019', 
			'requirements' => 'Dokumentasi dari aplikasi ini dibuat terintegrasi dengan Knowledge Management System Bank Mandiri', 
			'requirement_category_id' => $category->id, 
			'requirement_priority_id' => $priority->id, 
			'requirement_phase_id' => $phase->id, 
			'acceptance_criteria' => 'Sesuai requirement', 
		]); 
		$verification = RequirementVerification::where('name', 'INSPECTION')->first();
		$reqDoc->verifications()->attach($verification);
		$verification = RequirementVerification::where('name', 'DEMONSTRATION')->first();
		$reqDoc->verifications()->attach($verification);
    }
}
